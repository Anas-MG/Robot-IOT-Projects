

## Robot Control System
![Robot_controller_webpage](https://user-images.githubusercontent.com/49666154/127559186-b51c9e13-d07b-432b-8300-b6908a21af08.png)


#### Our Approach here is to create a reliable system that controls the Robot arm & base values from webpage
#### The system should posts values of the Robot arm & base to the database, and get them to the ROS to control the robot
#### two seperate php pages to get values from database, this is to handle it with python send it to ROS
#
### 1- Robot Base & Arm Controller webpage to post values to the database
![Screenshot (244)](https://user-images.githubusercontent.com/49666154/127553159-d3c10e3f-675d-4df0-9afb-0a18aca20492.png)
##### -  This is written with HTML, CSS, JS, JQUERY with PHP as backend
##### -  Responsive design

##### Files:
- ##### robot_control_system .php and .css
> ##### robot controller webpage files  
- ##### values.js 
> ##### script that handle values from the range slider (on change) and from arrows (on click) and post them to"db_update.php"
- ##### db_update.php
> ##### send posted values to the database.
- ##### db_conn.php 
> ##### establishing a connection to the database
#
###  2- Seperate PHP pages to get values from the database

![Screenshot (240)](https://user-images.githubusercontent.com/49666154/127550842-86f9a1e2-d05e-441b-ab19-99111059408d.png)
##### Files:
- ##### arm.php:
> ##### php page that gets the values from the ARM database and show them on screen 
- ##### base.php:
> ##### php page that gets the values from the BASE database and show them on screen 
#
