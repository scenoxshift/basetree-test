<?php

namespace App\Http\Controllers;

use App\BLL\PostResource;
use BaseTree\Controllers\WebController;

class PostsController extends WebController
{
	public function __construct(PostResource $resource)
	{
		parent::__construct($resource);
		$this->middleware('auth');
		$this->viewPath = 'post';
	}
}
