<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        $data=[
            'first' => 'one',
            'second'=> 'two'
        ];
        echo view('target', $data);
        echo 'THis is user aria';
    }

	public function getAllUser(){
		echo '<h2> This is a product:</h2>';
	}

}