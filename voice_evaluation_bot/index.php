<?php 
include 'db_conn.php';
$conn =OpenCon();

// post visitor rate to database 
    if(isset($_POST['rate'])){  
    $rate = $_POST['rate'];
    $sql = "INSERT INTO notes (id,rate,note)
    VALUES (NULL, '$rate', 'unnoted')";
    $result = mysqli_query($conn, $sql) or die ("Cant insert");
}
// // post visitor note to database 
// if(isset($_POST['note'])){  
//   $note = $_POST['note'];
//   $sql = "INSERT INTO notes (id,rate,note)
//   VALUES (NULL, 'unrated', '$note')";
//   $result = mysqli_query($conn, $sql) or die ("Cant insert");
// }

?>
<!DOCTYPE html>
<html lang="ar-AE">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css" />
    <title>روبوت التقييم </title>
  </head>
  <body>
    <div class="main">
      <button id="start">ابدا</button>
      <div class="robot__face">
        <div class="robot__mouth">
          <div class="robot__top"></div>
          <div class="robot__bottom"></div>
        </div>
        </div>
        <!-- <label id='name' ></label> -->
      </div>
    </div>
    <script src="index.js"></script>
  </body>
</html>


