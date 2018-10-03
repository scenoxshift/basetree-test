<?php

namespace App;

use BaseTree\Models\BaseTreeModel;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements BaseTreeModel
{
	protected $fillable = ['title', 'content', 'user_id'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function comments() {
		return $this->hasMany('App\Comment');
	}
}
