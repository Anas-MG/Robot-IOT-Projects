<?php
include 'db_conn.php';
$conn = OpenCon(); 

//selecting all values from database and stor them in variabels to save last update 
$sql = "SELECT * FROM arm_sliders WHERE id = 0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // saving values into variables
  while($row = $result->fetch_assoc()) {
    $gripper = "" . $row["gripper"]. "" ;
    $wrist = "" . $row["wrist"]. "" ;
    $elbow = "" . $row["elbow"]. "" ;
    $shoulder = "" . $row["shoulder"]. "" ;
    $arm_base = "" . $row["arm_base"]. "" ;
   
  }
} else {
  echo "error selecting the values from database hint='check id in query'";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./robot_control_system.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>نظام تحكم الروبوت الالي</title>
  </head>

  <body>

 <div class="hero-left">
  <section>
        <div class="right">
            <img
               src="Images/logoSM.png"
               class='bottom-right'
                alt="Picture of SmartMethods" />

           <h1 class='headerbox'>
                نظام تحكم الروبوت الآلي 
                <img class="icon" src="Images/robotic_arm.png" />
          </h1> 


           <!-- reset is a row inder the main h1-->
            <div class='reset'> 
                 <h2>  <input type="button" value='! هنا' id='reset'
                 onclick='reset();'/>وزن الذراع للاعلى</h2>
                <h3>prod: AnasMg</h3>     
            </div>
        </div>
       
        <form >
          <div class="form-left">
            <header class="header headerbox">الذراع الالية</header>
            <!--  using php values to get the latest values from db  -->
            <label for="gripper">الذراع</label>
            <input type="range" min="1"max="160"value="<?php echo $gripper?>"class="slider"name="gripper"id="gripper"/>
            <h3 name="gripper-oput" id="gripper-oput"></h3>

            <label for="wrist">المعصم</label>
            <input type="range" min="1" max="160"value="<?php echo $wrist?>" class="slider"name="wrist" id="wrist"/>
            <h3 id="wrist-oput" name="wrist-oput"></h3>

            <label for="elbow">الكوع</label>
            <input type="range" min="1" max="160" value="<?php echo $elbow?>" class="slider" name="elbow"  id="elbow" />
            <h3 name="elbow-oput" id="elbow-oput"></h3>

            <label for="shlouder">الكتف</label>
            <input type="range"min="1"max="160" value="<?php echo $shoulder?>"class="slider"name="shoulder"id="shoulder"/>
            <h3 name="shoulder-oput" id="shoulder-oput"></h3>

            <label for="arm_base">قاعدة الذراع</label>
            <input type="range"min="1"max="160"value="<?php echo $arm_base?>"class="slider" name="arm_base"id="arm_base"/>
            <h3 name="arm_base-oput" id="arm_base-oput"></h3>
            

            <h2 class=" header headerbox">القاعدة</h2>
            <form >
              <!-- form ttb and form rtl are the containers for the arrow to make a buttons shape  -->
              <div class="form-ttb">
                <input type="button"value=""class="triangle triangle-forward" id="forward"name="forward" />
                <div class="form-rtl">
                  <input type="button"id="left"name="left" class="triangle triangle-left" />
                  <input type="button"value="ON"name="on"id="on"onclick="onStart();" class="start-btn"/>
                  <input type="button"name="right"class="triangle triangle-right" id="right"/>
                </div>
                <input type="button"value=""id="backward"name="backward"class="triangle triangle-back"/>
              </div>
            </form>
          
          </div>
        </form> 
      </section>
    </div>
    <script type="text/javascript" src="values.js"></script>
  </body>
</html>
