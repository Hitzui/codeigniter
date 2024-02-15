<?php

namespace App\Controllers;

class Test extends BaseController
{

    public function getIndex()
    {
        return view("test");
    }

    public function getEmpleado()
    {
        return "Empleado de ejemplo";
    }
}