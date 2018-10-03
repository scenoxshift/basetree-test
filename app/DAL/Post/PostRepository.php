<?php


namespace App\DAL\Post;
use BaseTree\Eloquent\RepositoryInterface;


interface PostRepository extends RepositoryInterface
{

	public function getLastOrdered($paginate = 10);
}
