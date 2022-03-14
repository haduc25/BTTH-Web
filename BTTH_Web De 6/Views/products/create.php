<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <style>
        .container
        {
            border: 1px solid #000;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            background: #ddd;

        }

        
        a{
            text-decoration: none;
            color: #000;
        }

    </style>
</head>
<body>
        <div class="container">
                <h1>Thêm sản phẩm </h1>
                <form action="insert" method="POST" enctype="multipart/form-data">
                    <div class="txt" style="display: none">
                        <label for="">Mã sản phẩm</label>
                        <input type="text" name="masp"><br>

                    </div>


                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="tensp"><br>

                    <label for="nhasx">Nhà sản xuất</label>
                    <select name="manhasx" id="nhasx">
                        <option value="Google">Google</option>
                        <option value="Apple">Apple</option>
                        <option value="Samsung">Samsung</option>
                        <option value="LG">LG</option>
                    </select>
                    <br>

                    <label for="">Số lượng </label>
                    <input type="number" name="soluong" min="1" value="1"><br>

                    <label for="">Đơn giá </label>
                    <input type="number" name="dongia" min="1000" value="1000"><span style="font-weight: bold">VND</span><br>

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