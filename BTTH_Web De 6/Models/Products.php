<?php

require_once 'BaseModel.php';


class Products extends BaseModel
{
    public $tableName = 'tbl_sanpham';
    public $columns = ['ma_sp', 'ten_sp', 'ma_nhasx', 'dongia', 'soluong'];
}   

?>