<?php

namespace App;

use BaseTree\Models\BaseTreeModel;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model implements BaseTreeModel
{
	protected $fillable = ['comment', 'user_id', 'post_id'];

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function post() {
		return $this->belongsTo('App\Post');
	}
}
