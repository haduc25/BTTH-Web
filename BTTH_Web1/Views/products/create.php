<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>
<body>
        <div class="container">
                <h1>Thêm sản phẩm </h1>
                <form action="insert" method="POST" enctype="multipart/form-data">
                    <label for="">Mã sản phẩm</label>
                    <input type="text" name="masp"><br>

                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="tensp"><br>

                    <label for="">Nhà sản xuất</label>
                    <input type="text" list="browsers" name="manhasx"/><br>
                    <datalist id="browsers">
                        <option>Google</option>
                        <option>Apple</option>
                        <option>Samsung</option>
                        <option>LG</option>
                    </datalist>

                    <label for="">Hình ảnh</label>
                    <input type="file" name="hinhanh">

                    <br>
                    <br>
                    <button type="submit">
                        <span>Thêm</span>
                    </button>

                    <button type="button">
                        <span><a href="../index.php">Quay lại</a></span>
                    </button>
                </form>

        </div>
</body>
</html>