<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index of Views</title>
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
                                <th>hình ảnh</th>
                                <td>
                                    <a href="./products/create">Insert</a>
                                </td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $stt = 1;
                                foreach ($products as $product)
                                {?>
                                <tr>
                                    <td><?= $stt ?></td>
                                    <td><?=$product->ten_sp ?></td>
                                    <td><?=$product->ma_nhasx ?></td>
                                    <td><img src="<?=$product->hinhanh ?>" alt="<?=$product->ten_sp ?>" width='80'></td>
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