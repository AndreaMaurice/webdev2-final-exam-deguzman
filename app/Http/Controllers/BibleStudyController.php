<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibleRequest;
use App\Utils\Twilio;

class BibleStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bible-study/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bsrequest = new BibleRequest;
        $bsrequest->fname = $request->input('fname');
        $bsrequest->lname = $request->input('lname');
        $bsrequest->email = $request->input('email');
        $bsrequest->phone = $request->input('phone');
        $bsrequest->bdate = $request->input('bdate');
        $bsrequest->religion = $request->input('religion');
        $bsrequest->bsdate = $request->input('bsdate');
        $bsrequest->bstime = $request->input('bstime');
        $bsrequest->location = $request->input('location');
        

            $fname = $request->input('fname');
            $phone = $request->input('phone');
            $bsdate = $request->input('bsdate');
            $bstime = $request->input('bstime');
    
            $result = $bsrequest->store($fname, $phone, $bsdate, $bstime);
            if ($result !== false) {// ! = =
                Twilio::sendMessage($fname, $phone, $bsdate, $bstime);
                $bsrequest->save();
                return view('bible-study.thanks');
            } else {
                return redirect('/');
            }

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

    public function bsreq(){

        $bsrequests = BibleRequest::all();
        return view('bible-study.requests', [
            'bsrequests' => $bsrequests
        ]);
    }
}
