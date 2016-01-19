<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use View;

class Hello_controller extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    $user1=user::all(); 
    
    return View::make('Hello',array('user1' => $user1));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

         echo $request->name;

         $user1= new user;
             $user1->s_name = $request->name;
             $user1->save();
         return redirect()->action('Hello_controller@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request)
    {
          
    $user1=user::find($request->id);
    print_r($user1->id);
    print_r($user1->s_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request)
    {
    
        //echo $request->uname;
        $user1=user::all();
        foreach($user1 as $u){
        //print_r($u->s_name);
        if($u->s_name===$request->uname)
          return redirect()->action('Hello_controller@index');
        else{
                
             }   
        }


    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        //echo $request->id;
       // echo $request->n_name;
        $user1=user::find($request->id);
        $user1->s_name = $request->n_name;
        //echo $user1->s_name;
        $user1->save();
        return redirect()->action('Hello_controller@index');
        //echo $user1;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request)
    {
        echo $request->id;
        user::destroy($request->id);
        return redirect()->action('Hello_controller@index');
    }
}
?>