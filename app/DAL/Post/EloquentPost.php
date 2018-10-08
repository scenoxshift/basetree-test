<?php


namespace App\DAL\Post;


use App\Post;
use BaseTree\Eloquent\BaseEloquent;
use App\DAL\Post\PostRepository;

class EloquentPost extends BaseEloquent implements PostRepository
{
	/**
	 * EloquentPost constructor.
	 * @param Post $model
	 */
	public function __construct(Post $model)
    {
        parent::__construct($model);
    }

	/**
	 * @param int $paginate
	 * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
	 */
	public function getLastOrdered($paginate = 10) {
        return $this->model->orderBy('created_at', 'desc')->paginate($paginate);
    }
}
