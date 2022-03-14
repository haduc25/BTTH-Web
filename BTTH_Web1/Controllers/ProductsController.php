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
        $_hinhanh = $_FILES['hinhanh'];

        $fileName = $_hinhanh['name'];
        $products = new Products();
        $products->ma_sp = $_masp;
        $products->ten_sp = $_tensp;
        $products->ma_nhasx = $_manhasx;


        $fileName = null;
        if($_hinhanh['size'] > 0){
            $fileName = 'upload/' . time()."-".$_hinhanh['name'];;
        }

		if(move_uploaded_file($_hinhanh['tmp_name'], $fileName))
		{
			//have image
			// $sql.=" ,avatar=:avatar";
		}else
		{
			//no image
			$fileName = null;
		}

        $products->hinhanh = $fileName;
        $products->insert();

        echo "done";


    }
}










?>