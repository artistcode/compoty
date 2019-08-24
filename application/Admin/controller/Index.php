<?php
namespace app\Admin\controller;

use think\View;

class Index extends  Common
{
    public function index()
    {

        $view = new View();

        return     $view->fetch();


    }
}
