<?php

namespace Hoang9104\Setup\Controllers\Client;

use Hoang9104\Setup\Commons\Controller;

class ProductController extends Controller{
    public function index(){
        echo __CLASS__ . '@' . __FUNCTION__;
        
    }
    public function detail($id){
        echo __CLASS__ . '@' . __FUNCTION__ . '@' . $id;
        
    }
}