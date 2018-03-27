<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 21.02.2018
 * Time: 22:29
 */

namespace Corp\Repositories;

use Corp\Article;


class ArticlesRepository extends Repository
{

    public function __construct(Article $articles)
    {
        $this->model = $articles;
    }


}