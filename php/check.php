<?php
 $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
 $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING );
 $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

 if(mb_strlen($login) <3 || mb_strlen($login) >15) {echo "invalid login";
  exit ();
 } else if(mb_strlen($name) <3 || mb_strlen($name) >15) {echo "invalid name";
  exit ();
 } else if(mb_strlen($pass) <8 || mb_strlen($pass) >24) {echo "invalid password(8-24 symbols)";
  exit ();
 }

 $pass = md5($pass."hui1");

 $mysql = new mysqli('localhost','sashko','Y8bmtKWhr4sX!','test_login');
 $mysql->query("INSERT INTO `users` (`login`,`pass`, `name`) VALUES('$login','$pass','$name')");

 $mysql->close();

 header('Location: /');
 exit();

 ?>

