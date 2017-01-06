<?php
		$con = mysqli_connect('localhost', 'root', '', 'siteDB');
  		if (!$con){
  			die ("<b>Нет конекта с базой данных, проверьте правильность имени пользователя и пароля!</b>");
  		}
  		mysqli_query($con,"SET NAMES 'utf8'"); 
        mysqli_query($con,"SET CHARACTER SET 'utf8'"); 
        mysqli_query($con,"SET SESSION collation_connection = 'utf8_general_ci'");
?>