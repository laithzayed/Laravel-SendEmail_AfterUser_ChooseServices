<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
//use Illuminate\Notifications\Notifiable;
//use App\Notifications\AgendamentoPendente;
//use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;

class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::orderByDesc('id')->get();
        return view('/',compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client                      = new Client();
        $client->name       =$request->get('name');
        $client->phone      =$request->get('phone');
        $client->email      =$request->get('email');
        $client->choice     =$request->get('choice');
        $client->time       =$request->get('time');
        $client->save();

        Mail::to($request['email'])->send(new WelcomeMail($client));
//          Mail::to($request['email'])->send(new MailNotify($client));

        return redirect()->route('form');

//        $client = Client::select("email")->get();
//        \Notification::send($client, new AgendamentoPendente(1));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
