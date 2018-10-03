<?php

namespace App\Http\Controllers;

use App\DAL\Post\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	protected $postRepository;
	
    public function __construct(PostRepository $postRepository)
    {
        $this->middleware('auth');
        $this->postRepository = $postRepository;
    }
    
	public function index()
	{
		$posts = $this->postRepository->getLastOrdered(10);
		return view('home', compact('posts'));
	}
}
