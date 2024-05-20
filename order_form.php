
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <h1>Thông Tin Đặt Hàng</h1>
    <form action="add_order.php" method="post">
        <label for="name">Tên người nhận:</label><br>
        <input type="name" id="name" name="name" required><br>
       
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="SDT">SDT:</label><br>
        <input type="SDT" id="SDT" name="SDT" required><br>

        <label for="Place">Địa chỉ:</label><br>
        <input type="Place" id="Place" name="Place" required><br>
        
        
        <input type="submit" value="Đặt Hàng">
        <a href="index.php">Quay lại trang chủ</a>
    </form>
</body>
</html>
