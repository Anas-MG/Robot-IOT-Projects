

# Robot Control System
#### The Project is basically a controller page that sends & recieves values from SQL database with two extra pages to get values
#### The idea is that these values can be handled and sent to the robots microcontroller.
 ## Robot Base & Arm Controller page 
 ##### This page contains arm & base values controller with switch on/off button, the values are connected to the db
![Screenshot (244)](https://user-images.githubusercontent.com/49666154/127553159-d3c10e3f-675d-4df0-9afb-0a18aca20492.png)
##### -  This was built using HTML, JS, CSS, JQUERY, And PHP as backend
##### -  Responsive design

- ##### robot controller main page  
> ##### file: robot_control_system.php 
- ##### script that handle values from the range slider (on change) and from arrows (on click) and post them to"db_update.php"
> ##### file: values.js 
- ##### send posted values to the database.
> ##### file: db_update.php
- ##### establishing a connection to the database
> ##### file: db_conn.php 
#
 ## Extra pages to get values from the database.
##### These two pages can be handled by a script and sent to the microcontroller. 
![arm_base_pages](https://user-images.githubusercontent.com/49666154/127559708-a3a6a7fa-fe57-450c-a3b4-a30001a47067.png)

- ##### php page that gets the values from the ARM db 
> ##### File: arm.php:
- ##### php page that gets the values from the BASE db  
> ##### File: base.php:
#
