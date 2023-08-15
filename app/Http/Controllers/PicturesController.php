<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picture ;

class PicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pictures.index' , ['pictures'=> Picture::all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("pictures.create");



        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'picture'=>'required' ,
                'title'=>'required'
            ]


        );
        $picture = new Picture();
        $picture->picture = $request->input('picture');
        $picture->title = $request->input('title');
        $picture->description = $request->input('description');
        $picture->save();
        return redirect()->route('pictures.index');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pic = Picture::findOrFail($id);
        return view("pictures.show" , ['picture'=>$pic]);





    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        return view('pictures.edit' , ['pic'=>Picture::findOrFail($id)]);
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
        $pic = Picture::findOrFail($id);
        $request->validate(
            [
                'picture'=>'required' ,
                'title'=>'required'
            ]


        );
        $pic->picture = strip_tags($request->input('picture'));
        $pic->title = strip_tags($request->input('title'));
        $pic->description = strip_tags($request->input('description'));


        $pic->save();
        return redirect()->route('pictures.show' , $id);






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
