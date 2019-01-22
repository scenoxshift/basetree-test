<?php

namespace App\Http\Controllers;

use App\DAL\Message\MessageRepository;
use App\Events\MessageSent;

class MessagesController extends Controller
{
    /**
     * @var MessageRepository
     */
    private $messageRepository;

    /**
     * MessagesController constructor.
     * @param MessageRepository $messageRepository
     */
    public function __construct(MessageRepository $messageRepository)
    {
        $this->middleware('auth');
        $this->messageRepository = $messageRepository;
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
    public function fetch()
    {
        return $this->messageRepository->getLastFiftyWithUserRelation();
    }

    /**
     * @return array
     */
    public function send()
    {
        $message = auth()->user()->messages()->create([
            'message' => request('message')
        ]);

        broadcast(new MessageSent(auth()->user(), $message))->toOthers();

        return ['status' => 'Message Sent!'];
    }
}
