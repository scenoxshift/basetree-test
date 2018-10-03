<?php

namespace App\Http\Controllers;

use App\DAL\Post\PostRepository;
use App\Http\Requests\StorePost;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	protected $postRepository;
	public function __construct(PostRepository $postRepository)
	{
		$this->middleware('auth');
		$this->postRepository = $postRepository;
	}
	
	public function store(StorePost $request)
	{
		$data = $request->validated();
		$data['user_id'] = auth()->id();
		
		$this->postRepository->create($data);
		
		return redirect()->back();
	}

	public function show($id)
	{
		$post = $this->postRepository->findOrFail($id);
		return view('post.show', compact('post'));
	}
}
