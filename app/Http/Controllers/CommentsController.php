<?php

namespace App\Http\Controllers;

use App\Comment;
use App\DAL\Comment\CommentRepository;
use App\DAL\Post\PostRepository;
use Illuminate\Http\Request;
use App\Post;
use App\Notifications\NotifyPostOwner;

class CommentsController extends Controller
{
	protected $commentRepository;
	protected $postRepository;
	
	public function __construct(CommentRepository $commentRepository, PostRepository $postRepository)
	{
		$this->commentRepository = $commentRepository;
		$this->postRepository = $postRepository;
	}
	
	public function store()
	{
		request()->validate([
			'comment' => 'required|min:4'
		]);
		
		$this->commentRepository->create([
			'user_id' => auth()->id(),
			'comment' => request('comment'),
			'post_id' => request('post_id')
		]);
		
		$post = $this->postRepository->findWithRelations(request('post_id'), ['user']);
		$post->user->notify(new NotifyPostOwner($post, auth()->user()->name));
		
		return redirect()->back();
	}
}
