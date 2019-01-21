<?php

namespace App;

use BaseTree\Models\BaseTreeModel;
use Illuminate\Database\Eloquent\Model;

class Message extends Model implements BaseTreeModel
{
    
    protected $fillable = ['message'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
