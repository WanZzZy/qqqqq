<?php

namespace App\Http\Controllers;

use App\Models\MyTableModel;
use Illuminate\Http\Request;

class MyTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('my_table', [
            'models' => MyTableModel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyTableModel  $myTableModel
     * @return \Illuminate\Http\Response
     */
    public function show(MyTableModel $myTableModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyTableModel  $myTableModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MyTableModel $myTableModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MyTableModel  $myTableModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyTableModel $myTableModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyTableModel  $myTableModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyTableModel $myTableModel)
    {
        //
    }
}
