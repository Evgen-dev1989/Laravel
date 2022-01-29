<?php

namespace App\Http\Controllers ;
use App\Table;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
return view('home');
    }
    public function about(){
        return view('about');
    }
    public function loc(){
        return view('loc');
    }
    public function wishes(){
        return view('wishes');
    }



    public function wishes_(Request $wish){
        $valid = $wish->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:20|max:420',
        ]);
        $wishes = new \App\Models\Table();
        $wishes->email = $wish->input('email');
        $wishes->subject = $wish->input('subject');
        $wishes->message = $wish->input('message');
        $wishes->save();
        return redirect()->route('wishes') ;

    }
}
