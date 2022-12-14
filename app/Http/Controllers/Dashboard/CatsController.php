<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCatRequest;

class CatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //وظيفتها تجيب الكات يلي عندي
        $cats = Cat::all();

       return view('admin.cats.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create Category
        return view('admin.cats.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatRequest $request)
    {
        Cat::create($request->all());
         return redirect()->route('cats.index');
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
        $cat = Cat::FindOrFail($id);
        return view('admin.cats.edit',compact('cat'));
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
        $cat = Cat::FindOrFail($id);
        $cat->update($request->all());
        return redirect()->route('cats.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function archive(){

        $cats = Cat::onlyTrashed()->get();
        return view('admin.cats.archive',compact('cats'));
     }

     public function restore($id){

        $cats = Cat::withTrashed()->findOrFail($id)->restore();

        return redirect()->route('cats.index');
     }

     public function force($id){

        $cats = Cat::onlyTrashed()->findOrFail($id)->forceDelete();

        return redirect()->route('cats.archive');
     }




    public function destroy($id)
    {
        Cat::destroy($id);
        return redirect()->route('cats.index');
    }
}
