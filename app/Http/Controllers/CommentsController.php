<?php

namespace App\Http\Controllers;

use App\BLL\CommentResource;
use App\DAL\Comment\CommentRepository;
use BaseTree\Controllers\WebController;
use Illuminate\Http\Request;

class CommentsController extends WebController
{
	public function __construct(CommentResource $resource)
	{
		parent::__construct($resource);
	}
}
