<?php

$v10=$_POST['name'];
$v1= $_POST['designation'];
$v2= $_POST['company'];
$v3= $_POST['address'];
$v4= $_POST['city'];
$v5= $_POST['country'];
$v6= $_POST['areacode'];
$v7= $_POST['mobilenumber'];
$v9= $_POST['message'];
$v8= $_POST['email'];
$txt = "\nName - " .$v10.".\ndesignation - ". $v1  . "\nCompany -  " .$v2. "\naddress -  " .$v3. "\ncity -  " .$v4. "\ncountry - " .$v5. "\n areacode -" .$v6. "\nemail -" .$v8. "\nmobilenumber - ".$v7. "\nMessage - " .$v9;
echo $txt;
?>