<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Timmana&family=Zain:wght@200;300;400;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنتجات</title>
 
    <style>
       .card{
         float: right;
         margin-top: 20px;
         margin-left: 10px;
         margin-right: 10px;
       }
       .card img{
        width: 100%;
        height: 200px;
       }
       main{
        width: 60%;
       }
    </style>
</head>
<body>
    <center>
        <h3>جميع المنتجات المتوفرة</h3>
    </center>
    <?php
    include('config.php');
    $resulet = mysqli_query($con, "SELECT * FROM prod");
    while($row = mysqli_fetch_array($resulet)){
        echo "
           <center>
           <main>

    <div class='card' style='width: 15rem;'>
    <img src='$row[image]' class='card-img-top' >
    <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price] </p>
    <a href='delete.php? id=$row[id]' class='btn btn-danger'>خذف منتج</a>
    <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل منتج</a>
  </div>
</div>
</main>
           </center>
        ";
    }
    ?>

    
   
</body>
</html>