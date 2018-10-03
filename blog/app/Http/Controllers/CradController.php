<?php

namespace App\Http\Controllers;
use App\Http\Requests\CradRequest;
use App\Card;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;


class CradController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cards  = Card::all();
         return view('Card.Card',compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CradRequest $request)
    {
        $card = Card::create([
            'name' => $request->name
            ]);
        return redirect('/cards');



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
        $card =  Card::find($id);

        return $card;
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
        $card =  Card::find($id);

        return view('card.edit',compact('card'));
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
        //*simple validation in laravel
        /*
     $validator = Validator::Make($request->all()[
             'name' => 'required|min:3|max:10|string'
         ]   );
     if($validator->failed())
     {
         return redirect('Card.Card')
             ->withErrors($validator)
             ->withInput();
     }
     */

//


        $card =  Card::find($id);

       $card->update($request->all());
       return redirect('/cards');
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
        $card =  Card::find($id);

       $card->delete();
       return $card;
    }

    /**
     * Get upload a file to folder
     *
     * @param $request
     * @return string
     */
    private  function uploadFile($request)
{
        $file = $request->file('file_path');
        $randam = str_random(16);
        $extension = $file->getClientOriginalExtension();
        $file_url = $randam. '.'.$extension;
        if($extension =='pdf') {
            $file->move(public_path('pdf/'), $file_url);
            $file_url = 'pdf/'.$file_url;
        }
        if($extension == "jpg" || $extension =='png' || $extension =='gif' || $extension =='jpeg')
        {
            $file->move(public_path('images/'), $file_url);
            $file_url = 'images/'.$file_url;
        }
            return $file_url;
}



}
