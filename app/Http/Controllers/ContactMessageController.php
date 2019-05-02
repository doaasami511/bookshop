<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Message;

class ContactMessageController extends Controller
{
    public function create()
    {
    	return view ('pages.contact');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required'
    		]);
        //create new meaasage
        $message=new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //save message
        $message->save();
        //redirect
        return redirect('/')->with('success','Message sent'); //where he'hh go after sent message


    	Mail::send('inc.messages', [
    		'msg'=>$request->message
    		], function ($mail) use($request){
    			$mail->from($request->email , $request->name);
    			$mail->to('admin@example.com')->subject('contact Message');

    		});
    	return redirect()->back()->with('flash_message','thank you for your message');
    }

    public function getMessages(){
        $messages = Message::all();
        return view ('pages.messages')->with('messages', $messages);
    }

}
