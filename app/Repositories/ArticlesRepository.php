<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 21.02.2018
 * Time: 22:29
 */

namespace Corp\Repositories;

use Corp\Articles;


class ArticlesRepository extends Repository
{

    public function __construct(Articles $articles)
    {
        $this->model = $articles;
    }


}