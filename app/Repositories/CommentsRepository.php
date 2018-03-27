<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 21.02.2018
 * Time: 22:29
 */

namespace Corp\Repositories;

use Corp\Comment;


class CommentsRepository extends Repository
{

    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }


}