<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        Program::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
          'name' => 'required'
        ]);

        return Program::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        return Program::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $program= Program::find($id);
        $program->update($request->all());
        return $program;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        return Program::destroy($id);
    }
}