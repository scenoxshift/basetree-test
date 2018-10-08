<?php


namespace App\DAL\Post;
use BaseTree\Eloquent\RepositoryInterface;


interface PostRepository extends RepositoryInterface
{

	/**
	 * @param int $paginate
	 * @return mixed
	 */
	public function getLastOrdered($paginate = 10);
}
