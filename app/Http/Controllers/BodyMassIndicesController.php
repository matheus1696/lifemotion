<?php

namespace App\Http\Controllers;

use App\Models\BodyAssessment\BodyMassIndices;
use App\Http\Requests\StoreBodyMassIndicesRequest;
use App\Http\Requests\UpdateBodyMassIndicesRequest;

class BodyMassIndicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BodyMassIndices $bodyMassIndices)
    {

        $historical = $bodyMassIndices->where('user_id', Auth()->user()->id)->orderBy('created_at')->get();
        
        // Inicialize arrays para armazenar datas e valores BMI
        $data = [];
        $bmi = [];

        // Percorra o histórico para extrair as datas e os valores BMI
        foreach ($historical as $historic) {
            $data[] = $historic->created_at->format('d-m-Y'); // Formatando a data se necessário
            $bmi[] = $historic->bmi;
        }

        return view('bodyAssessment.BodyMassIndices.index', compact('historical', 'data', 'bmi'));
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
    public function store(StoreBodyMassIndicesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BodyMassIndices $bodyMassIndices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BodyMassIndices $bodyMassIndices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBodyMassIndicesRequest $request, BodyMassIndices $bodyMassIndices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BodyMassIndices $bodyMassIndices)
    {
        //
    }
}
