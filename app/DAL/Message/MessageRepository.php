<?php
namespace App\DAL\Message;

use BaseTree\Eloquent\RepositoryInterface;

interface MessageRepository extends RepositoryInterface
{
    public function getLastFiftyWithUserRelation();
}
