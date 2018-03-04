<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 21.02.2018
 * Time: 22:29
 */

namespace Corp\Repositories;

use Corp\Slider;


class SlidersRepository extends Repository
{

    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }


}