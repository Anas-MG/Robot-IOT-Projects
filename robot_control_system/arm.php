
 <!DOCTYPE html>
        <html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="./arm_base.css" />

                <title>Document</title>
        </head>
        <body>
  <div class="arm">
    <h1 class='values'>Values:</h1>
    <h2>
          <?php
    
    
    include 'db_conn.php';
    $conn = OpenCon(); 
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM arm_sliders WHERE id = 0";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         echo "id: " . $row["id"]. "<br/><br/>- Gripper: " . $row["gripper"]. " , Wrist: " . $row["wrist"]. ", Elbow: " . $row["elbow"].  " , Base: " . $row["arm_base"]. "<br>";
          }
        } else {
          echo "0 results";
      }
    
    
    $conn->close();           
    
    
    ?></h2>
  </div>
        </body>
        </html>