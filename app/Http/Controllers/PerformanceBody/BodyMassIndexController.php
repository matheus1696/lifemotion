<?php

namespace App\Http\Controllers\PerformanceBody;

use App\Http\Controllers\Controller;
use App\Models\PerformanceBody\BodyMassIndex;
use App\Http\Requests\StoreBodyMassIndexRequest;
use App\Http\Requests\UpdateBodyMassIndexRequest;
use Carbon\Carbon;

class BodyMassIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BodyMassIndex $bodyMassIndex)
    {
        //Criação Variável para ChartJS
        $graphic['create'] = true;

        //Histórico de Cadastros realizados
        $historical = $bodyMassIndex
            ->where('user_id', Auth()->user()->id)
            ->with('user')
            ->orderBy('date', 'DESC')
            ->get();

        
        if ($historical->isEmpty()) {
            //Atribuindo Valor quando Null
            $graphic['time'] = $graphic['weight'] = $graphic['height'] = $graphic['bmi'] = $graphic['bmiDefault'] = [];
        }else{
            // Percorra o histórico para extrair as datas e os valores BMI
            foreach ($historical as $key => $historic) {
                $time[] = (new Carbon($historic->date))->format('d/m/Y');;
                $weight[] = $historic->weight;
                $height[] = $historic->height;
                $bmi[] = $historic->bmi;
                $bmiDefault[] = 24.9;
            }            

            //Alterando a Ordem do Array para Apresentação no ChartJS
            $graphic['time'] = array_reverse($time);
            $graphic['weight'] = array_reverse($weight);
            $graphic['height'] = array_reverse($height);
            $graphic['bmi'] = array_reverse($bmi);
            $graphic['bmiDefault'] = array_reverse($bmiDefault);
        }

        return view('performanceBody.bodyMassIndex.index', compact('historical', 'graphic'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBodyMassIndexRequest $request)
    {
        //Calculo Indice de Gordura Corporal
        $request['bmi'] = $request['weight'] / ((($request['height'] / 100) * ($request['height'] / 100)));

        //Atribuindo Usuário Logado
        $request['user_id'] = Auth()->user()->id;

        //Cadastrando dados
        BodyMassIndex::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(BodyMassIndex $bodyMassIndex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BodyMassIndex $bodyMassIndex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBodyMassIndexRequest $request, BodyMassIndex $bodyMassIndex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BodyMassIndex $bodyMassIndex)
    {
        //
    }
}
