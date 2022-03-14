<?php
require_once './Models/Products.php';


class HomeController
{
    public function index()
    {
        $products = Products::all();

        require_once 'Views/index.php';
    }
    
}


?>