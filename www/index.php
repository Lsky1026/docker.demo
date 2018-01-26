<?php

    $con = mysqli_connect();
    if(!$con){
        die("test docker db fail " . mysql_error());
    }else{
        echo 'success';
    }
	phpinfo();