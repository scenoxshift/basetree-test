<?php
namespace App\DAL\Message;

use App\Message;
use BaseTree\Eloquent\BaseEloquent;

class EloquentMessage extends BaseEloquent implements MessageRepository
{
    /**
     * EloquentMessage constructor.
     * @param Message $model
     */
    public function __construct(Message $model)
    {
        parent::__construct($model);
    }
    
    public function getLastFiftyWithUserRelation()
    {
        return $this->model->with('user')->take(50)->get();
    }
}
