<?php


namespace App\DAL\Post;


use App\Post;
use BaseTree\Eloquent\BaseEloquent;
use App\DAL\Post\PostRepository;

class EloquentPost extends BaseEloquent implements PostRepository
{
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

	public function getLastOrdered($paginate = 10) {
        return $this->model
//			->where('user_id', '!=', auth()->id())
			->orderBy('created_at', 'desc')
			->paginate($paginate);
    }
}
