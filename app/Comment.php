<?php

namespace App;

use BaseTree\Models\BaseTreeModel;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model implements BaseTreeModel
{
	/**
	 * @var array
	 */
	protected $fillable = ['comment', 'user_id', 'post_id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo('App\User');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function post() {
		return $this->belongsTo('App\Post');
	}
}
