<?php

namespace App\Http\Controllers;

use App\Models\BodyAssessment\BodyMassIndex;
use App\Http\Requests\StoreBodyMassIndexRequest;
use App\Http\Requests\UpdateBodyMassIndexRequest;

class BodyMassIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BodyMassIndex $bodyMassIndex)
    {

        $historical = $bodyMassIndex
            ->where('user_id', Auth()->user()->id)
            ->with('user')
            ->orderBy('created_at', 'DESC')
            ->get();
        
        // Inicialize arrays para armazenar datas e valores BMI for ChartJS
        $time = [];
        $bmiDefault = [];

        // Percorra o histórico para extrair as datas e os valores BMI
        foreach ($historical as $historic) {
            array_unshift($time, $historic->created_at->format('d/m/y'));
            array_unshift($bmiDefault, 24.9);
        }

        return view('bodyAssessment.BodyMassIndex.index', compact('historical', 'time', 'bmiDefault'));
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
        //
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
