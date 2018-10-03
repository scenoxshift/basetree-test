<?php


namespace App\DAL\Comment;


use App\Comment;
use BaseTree\Eloquent\BaseEloquent;
use App\DAL\Comment\CommentRepository;

class EloquentComment extends BaseEloquent implements CommentRepository
{
    public function __construct(Comment $model)
    {
        parent::__construct($model);
    }
}
