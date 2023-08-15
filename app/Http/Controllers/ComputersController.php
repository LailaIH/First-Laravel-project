<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private static function getData(){
        return [
            ['id'=>1 , 'name'=>'LG' , 'origin' =>'US'],
            ['id'=>2 , 'name'=>'BMW' , 'origin' =>'UK'],
            ['id'=>3 , 'name'=>'KIA' , 'origin' =>'CHINA']
        ];
    }

    public function index()
    {
        $computersList = self::getData();
        return view('computers/index' , ['computers'=>$computersList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("computers.create");
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //$comps = self::getData();
        $comps = [
            ['id'=>1 , 'name'=>'LG' , 'origin' =>'US'],
            ['id'=>2 , 'name'=>'BMW' , 'origin' =>'UK'],
            ['id'=>3 , 'name'=>'KIA' , 'origin' =>'CHINA']
        ];

        $index = array_search(  $id , array_column($comps,'id')  );
        if($index===false){
            abort(404);
        }
        return view('computers.show' , ['computer'=>$comps[$index]]);
        
  




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
