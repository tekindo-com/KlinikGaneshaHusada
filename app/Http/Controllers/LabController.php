<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResultLab;
use App\Diagnosis;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $resultLab = ResultLab::all();
        return view('health_analyst.lab.listResultLab',compact('resultLab'));
    }

    public function indexDiagnoses()
    {
        //        
        $diagnoses = Diagnosis::all();
        return view('health_analyst.lab.createResultLab',compact('diagnoses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $diagnosis = Diagnosis::find($id);        
        return view('health_analyst.lab.formResultLab',compact('diagnosis'));        
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return dd($request->all());
        $data = [
            'diagnosis_id' => $request->diagnosis_id,
            'result' => $request->result
        ];

        ResultLab::create($data);
        return redirect()->route('health_analyst.lab.listResultLab');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
