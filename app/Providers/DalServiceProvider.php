<?php
	
namespace App\Providers;

use App\DAL\Comment\CommentRepository;
use App\DAL\Comment\EloquentComment;
use App\DAL\Post\EloquentPost;
use App\DAL\Post\PostRepository;
use App\DAL\User\EloquentUser;
use App\DAL\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class DalServiceProvider extends ServiceProvider
{
	public function register() {
		$bindings = [
			UserRepository::class => EloquentUser::class,
			PostRepository::class => EloquentPost::class,
			CommentRepository::class => EloquentComment::class,
			# Every other repository should be registered here
		];

		foreach($bindings as $interface => $implementation) {
			$this->app->bind($interface, $implementation);
		}
	}
}