<?php

$hostDB = 'ec2-3-229-11-55.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'd8r7umufb1c9hf';
$userDB = 'adqvermgllimuz';
$pwDB = 'f807858d359107a40bafa23ff9f169ce73dffb380ee3a4d14362e215c0b34207';

$connection = pg_connect("host = $hostDB port = $portDB dbname = $nameDB user = $userDB password = $pwDB");

 session_start();
if($connection){

}else{
 
}
?>
