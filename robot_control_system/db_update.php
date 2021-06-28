<?php

include 'db_conn.php';
$conn = OpenCon(); 
//updating navigation values to database if any isset !
if(isset($_POST['start'])){
        $start = $_POST['start'];
$sql = "UPDATE main_base
SET  start= $start  WHERE id=0";
$result = mysqli_query($conn, $sql) or die ("Cant insert");

}
if(isset($_POST['navigate'])){
        
        $navigate = $_POST['navigate'];
$sql = "UPDATE main_base
SET  movement = '$navigate'  WHERE id=0";
$result = mysqli_query($conn, $sql) or die ("Cant insert");

}
     

//updating arm values to database if any isset !
if(isset($_POST['gripper'])){
        $gripper = $_POST['gripper'];
        $sql = "UPDATE arm_sliders  SET  gripper =$gripper  WHERE id=0 ";
        $result = mysqli_query($conn, $sql) or die ("Cant insert");
        }
if(isset($_POST['wrist'])){
        $wrist = $_POST['wrist'];
        $sql = "UPDATE arm_sliders  SET  wrist =$wrist  WHERE id=0 ";
        $result = mysqli_query($conn, $sql) or die ("Cant insert");
        }
if(isset($_POST['elbow'])){
        $elbow = $_POST['elbow'];
        $sql = "UPDATE arm_sliders  SET  elbow =$elbow  WHERE id=0 ";
        $result = mysqli_query($conn, $sql) or die ("Cant insert");
}
if(isset($_POST['shoulder'])){
        $shoulder = $_POST['shoulder'];
        $sql = "UPDATE arm_sliders  SET  shoulder =$shoulder  WHERE id=0 ";
        $result = mysqli_query($conn, $sql) or die ("Cant insert");
}
if(isset($_POST['arm_base'])){
        $arm_base = $_POST['arm_base'];
        $sql = "UPDATE arm_sliders  SET  arm_base =$arm_base  WHERE id=0 ";
        $result = mysqli_query($conn, $sql) or die ("Cant insert");
}

        ?>