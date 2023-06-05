<?php
require "dbconnect.php";
$SESSION_START();

                if(isset($_GET['c1']))
                {
                	$status="Booked";
                	$iscative="1";
                	

                }
                else
                {
                	$status="pending";
                	$isctive="0";
                }

?>