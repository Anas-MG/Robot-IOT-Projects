

## Robot Controle System
#### Our Approach here is to create a reliable system that controls the arm and base values online
#### we need to post values of the Robot arm and base to the database, and get them to the ROS to control the robot
#### two seperate php pages to get values from database, this is to handle it with python send it to ROS
![Screenshot (242)](https://user-images.githubusercontent.com/49666154/127552022-a7a383e0-55fc-42e8-9fbe-d1256fb86eae.png)

#
### Robot Base & Arm Controller webpage to post values to the database
##### Posts the values to the database
![Screenshot (244)](https://user-images.githubusercontent.com/49666154/127553159-d3c10e3f-675d-4df0-9afb-0a18aca20492.png)
##### -  This is written with HTML, CSS, JS, JQUERY with PHP as backend
##### -  Responsive design

##### Files:
- ##### robot_control_system .php and .css
> ##### the main files for designing the robot control system , 
- ##### values.js 
> ##### takes the values from the range slider on change and from arrows on click , post values to"db_update.php"
- ##### db_update.php
> ##### takes the posted values and send them to the database.

#
###  Seperate PHP pages to get values from the database

![Screenshot (240)](https://user-images.githubusercontent.com/49666154/127550842-86f9a1e2-d05e-441b-ab19-99111059408d.png)
##### Files:
- ##### arm.php:
> ##### php page that gets the values from the ARM database and show them on screen 
- ##### base.php:
> ##### php page that gets the values from the BASE database and show them on screen 
#
