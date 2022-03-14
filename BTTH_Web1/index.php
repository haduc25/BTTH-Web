<?php

    $url = isset($_GET['url']) == true ? $_GET['url']:"/";

    require_once './Controllers/HomeController.php';
    require_once './Controllers/ProductsController.php';


    switch($url)
    {
        case '/':
            $ctl = new HomeController();
            $ctl->index();
            break;
        
        case 'products/create':
            $ctl = new ProductsController();
            $ctl->create();
            break;
        
        case 'products/insert':
            $ctl = new ProductsController();
            $ctl->insert();
            break;








        default:
            require_once 'Views/page_404/index.html';
            break;
    }










?>