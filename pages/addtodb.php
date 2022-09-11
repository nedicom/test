<?php
  $con = mysqli_connect("a140468.mysql.mchost.ru","a140468_nedicom","KF2Q4OXJ7w","a140468_nedicom");
    // Check connection
	$con->query("SET NAMES 'utf8'");
			  if ($con->connect_error) {
				die($connectbutton="Соединение не удалось: " . $con->connect_error);
				}
				$connectbutton="Соединение успешно";

        $id = $_POST['id'];
        $body = $_POST['body'];

    if(!empty($_POST['id'])) {
      $query = "UPDATE `users` SET body = $body where id = $id";
                  }
          else{
            $query = "INSERT INTO `users`( body ) VALUES ($body)";
            }
    $result   = mysqli_query($con, $query);
?>
