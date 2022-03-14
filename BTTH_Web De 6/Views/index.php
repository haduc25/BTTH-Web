<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index of Views</title>
    <style>
            .container{
                background: #ddd;
                width: 700px;
                color: #000;
                margin:auto;
            }
            h1{
                text-align: center;
            }

            a
            {
                text-decoration: none;
                color: #000;
            }

            a:hover
            {
                text-decoration: underline;
                background: red;
            }

            a:hover
            {

            }

            table,tr,td,th{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
                padding-bottom: 15px;
            }
            table{
                margin: auto;
            }

            .tinh_nang
            {
                font-weight: bold;
                padding-left: 10px;
                padding-right: 10px;
            }

    </style>
</head>
<body>
        <div class="container">
                <div class="title-header">
                    <h1>Danh sách sản phẩm </h1>
                </div>

                <div class="table-products">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Nhà sản xuất</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <td class="btn">
                                    <a href="./products/create" class="tinh_nang">Insert</a>
                                </td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $stt = 1;
                                foreach ($products as $product)
                                {
                                    $total = ($product->dongia * $product->soluong);
                                ?>
                                <tr>
                                    <td><?= $stt ?></td>
                                    <td><?=$product->ten_sp ?></td>
                                    <td><?=$product->ma_nhasx ?></td>
                                    <td><?=$product->soluong ?></td>
                                    <td><?= number_format($product->dongia, 0, ",", ",")  ?></td>
                                    <td><?= number_format($total, 0, ",", ",") ?></td>
                                    <td class="tinh_nang">
                                        <a href="#">Edit</a> |
                                        <a href="#">Del</a>
                                    </td>
                                </tr>
                            <?php  $stt++; } ?>  
                        </tbody>
                        
                    </table>
                </div>
        </div>
</body>
</html>