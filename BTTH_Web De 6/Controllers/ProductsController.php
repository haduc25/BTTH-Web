<?php 


class ProductsController
{
    public function create()
    {
        require_once 'Views/products/create.php';
    }



    public function insert()
    {
        $_masp = $_POST['masp'];
        $_tensp = $_POST['tensp'];
        $_manhasx = $_POST['manhasx'];
        $_soluong = $_POST['soluong'];
        $_dongia = $_POST['dongia'];

        $products = new Products();
        $products->ma_sp = $_masp;
        $products->ten_sp = $_tensp;
        $products->ma_nhasx = $_manhasx;
        $products->soluong = $_soluong;
        $products->dongia = $_dongia;

        // var_dump()

        $products->insert();

        header("Location: ../index.php");

    }
}










?>