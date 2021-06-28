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
    echo "id: " . $row["id"]. "- Gripper: " . $row["gripper"]. " - Wrist: " . $row["wrist"]. " - Elbow: " . $row["elbow"].  " - Base: " . $row["arm_base"]. "<br>";
  }
} else {
  echo "0 results";
}


$conn->close();           




?>