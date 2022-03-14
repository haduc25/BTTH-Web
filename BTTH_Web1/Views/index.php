<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index of Views</title>
    <style>

            .container{
                background: #00CED1;
                width: 700px;
                color: white;
                margin:auto;

            }
            h1{
                text-align: center;
            }
            table,tr,td,th{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 20px;
            }
            table{
                margin: auto;
            }
            .nut{
                background: red;
                border-radius: 5px;
                padding: 5px;
                text-decoration: none;
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
                                <td>
                                    <a href="./products/create">Insert</a>
                                </td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $stt = 1;
                                foreach ($products as $product)
                                {
                                    $total = ($product->dongia *  $product->soluong);
                                ?>
                                <tr>
                                    <td><?= $stt ?></td>
                                    <td><?=$product->ten_sp ?></td>
                                    <td><?=$product->ma_nhasx ?></td>
                                    <td><?=$product->soluong ?></td>
                                    <td><?=$product->dongia ?></td>
                                    <td><?=$total ?></td>
                                    <td>
                                        <a href="#">Edit</a>
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