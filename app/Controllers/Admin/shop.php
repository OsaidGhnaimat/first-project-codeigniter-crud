<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        echo 'admin shop';
    }

	public function product ($type, $product_id){
		echo '<h2> This is a product:'.$type.'with an id : '.$product_id.'</h2>';
	}

}