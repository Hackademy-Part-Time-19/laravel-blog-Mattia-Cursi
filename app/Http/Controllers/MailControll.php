<?php

namespace App\Http\Controllers;

use App\Mail\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailControll extends Controller
{

    private $tickets = [
        ['name' => 'a', 'user_email' => 'a@gmail.com', 'created_at' => '12/01/2023', 'description' => 'descrizione di prova', 'status' => 'aperto'],
        ['name' => 'b', 'user_email' => '', 'created_at' => '22/11/2003', 'description' => 'descrizione di prova', 'status' => 'aperto'],
        ['name' => '', 'user_email' => '', 'created_at' => '22/11/2003', 'description' => 'descrizione di prova', 'status' => 'aperto'],
        ['name' => '', 'user_email' => '', 'created_at' => '22/11/2003', 'description' => 'descrizione di prova', 'status' => 'aperto'],
        ['name' => '', 'user_email' => '', 'created_at' => '22/11/2003', 'description' => 'descrizione di prova', 'status' => 'aperto']

    ];


    public function tickets()
    {
        return view('tickets', ['tickets' => $this->tickets]);
    }

    public function show($id){

        return view('ticket',['ticket'=>$this->tickets[$id],'id'=>$id ]);
    }

    public function send(request $request){
        $ticket=$this->tickets[$request->id];

        Mail::to($ticket['user_email'])->send(new Answer($ticket['name'], $ticket['created_at'],$request->answer));

        return redirect()->back()->with(['succes'=>'Il ticket è stato gestito correttamente']);
    }

}
