<?php 
include 'db_conn.php';
$conn = OpenCon(); 

$sql = "SELECT * FROM main_base WHERE id = 0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - ON: " . $row["start"]. " - Movement: " . $row["movement"]. "<br>";
  }
} else {
  echo "0 results";
}
?>