<?php


namespace App\DAL\User;


use App\User;
use BaseTree\Eloquent\BaseEloquent;
use App\DAL\User\UserRepository;

class EloquentUser extends BaseEloquent implements UserRepository
{
	/**
	 * EloquentUser constructor.
	 * @param User $model
	 */
	public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
