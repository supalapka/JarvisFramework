<?php

namespace app\controllers;

abstract class Controller
{
    public abstract function index();
    public function render(array $data = null)
    {
    }
}
