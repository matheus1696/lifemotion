<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        // Verifica se o usuário não está sujeito a limitação de taxa (rate limiting).
        $this->ensureIsNotRateLimited();

        // Obtém as credenciais do formulário (email, senha e remember).
        $credentials = $this->only('email', 'password');
        $remember = $this->boolean('remember');

        // Tenta autenticar o usuário usando as credenciais.
        if (! Auth::attempt($credentials, $remember)) {
            // Incrementa o contador de tentativas (rate limiting).
            RateLimiter::hit($this->throttleKey());

            // Verifica se o usuário existe no banco de dados.
            $userExists = User::where('email', $credentials['email'])->exists();

            // Verifica se o usuário e a senha estão incorretos.
            $invalidCredentials = ! $userExists ? 'email' : 'password';

            // Define a mensagem de erro com base na verificação acima.
            $errorMessage = $invalidCredentials === 'email'
                ? trans('auth.failed')
                : trans('auth.password');

            // Lança uma exceção de validação com a mensagem personalizada.
            throw ValidationException::withMessages([
                $invalidCredentials => $errorMessage,
            ]);
        }

        // Se a autenticação for bem-sucedida, limpa o contador de tentativas (rate limiting).
        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }
}
