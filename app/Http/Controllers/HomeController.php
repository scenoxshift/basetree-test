<?php

namespace App\Http\Controllers;

use App\DAL\Post\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * @var PostRepository
	 */
	protected $postRepository;

	/**
	 * HomeController constructor.
	 * @param PostRepository $postRepository
	 */
	public function __construct(PostRepository $postRepository)
    {
        $this->middleware('auth');
        $this->postRepository = $postRepository;
    }

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		$posts = $this->postRepository->getLastOrdered(10);
		
		return view('home', compact('posts'));
	}
}
