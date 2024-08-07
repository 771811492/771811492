<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Timmana&family=Zain:wght@200;300;400;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسوق الكتروني |اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
     <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                  <h2>موقع تسويقي اونلاين</h2>
                  <img src="logoo.jpg" alt="logo" width="450px">
                  <input type="text" name='name' placeholder="اسم المنتج">
                   <br>
                   <input type="text" name='price' placeholder="سعر المنتج">
                   <br>
                   <input type="file" id="file" name='image' style='display:none;'>
                   <label for="file"> اختيار صورة للمنتج</label>
                   <button name='upload'>رفع المنتج</button>
                   <br><br>
                   <a href="prodact.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>طور بواسطة احمد المصنف</p>
     </center>
</body>
</html>