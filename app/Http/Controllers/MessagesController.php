<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Message;

class MessagesController extends Controller
{
    /**
     * MessagesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('chat.chat');
    }
    
    /**
     * @return mixed
     */
    public function fetchMessages()
    {
        return Message::with('user')->take(50)->get();
    }

    /**
     * @return array
     */
    public function sendMessage()
    {
        $message = auth()->user()->messages()->create([
            'message' => request('message')
        ]);

        broadcast(new MessageSent(auth()->user(), $message))->toOthers();

        return ['status' => 'Message Sent!'];
    }
}
