<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 21.02.2018
 * Time: 22:29
 */

namespace Corp\Repositories;

use Config;


abstract class Repository
{

    protected $model = FALSE;

    public function get()
    {
        $builder = $this->model->select('*');
        return $builder->get();
    }

}