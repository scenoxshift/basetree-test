<?php

namespace App;

use BaseTree\Models\BaseTreeModel;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements BaseTreeModel
{
	/**
	 * @var array
	 */
	protected $fillable = ['title', 'content', 'user_id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo('App\User');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments() {
		return $this->hasMany('App\Comment');
	}
}
