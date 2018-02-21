<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 21.02.2018
 * Time: 22:29
 */

namespace Corp\Repositories;

use Corp\Menu;


class MenusRepository extends Repository
{

    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }


}