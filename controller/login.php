<?php 
	class login extends ACoreAdmin {
		public function logining() {
			$email = $_POST['email'];
			$password = $_POST['password'];
			if(isset($_POST['register'])) {
				if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
					if ($_POST['password'] == $_POST['confirm_password']) {
						if  (count($this->db->db->query("SELECT * FROM `users` WHERE `email` ='" . $email . "'")) == 0) {
							$text = "INSERT INTO `users` (`email`, `password`) VALUES ('". $email ."', '". $password ."')";
							$this->db->db->execute($text);
							$_SESSION['id'] = $this->db->db->query("SELECT `id` FROM `users` WHERE `email` ='" . $email . "'")[0]['id'];
							$this->redirect();
						} else {
							$_SESSION['message'] = 'Данный логин занят';
						}
					} else {
						$_SESSION['message'] = 'Пароли разные';
					};
				} else {
					$_SESSION['message'] = 'Все поля должны быть заполнены';
				};
			};
			if(isset($_POST['auth'])) {
				if (!empty($_POST['email']) && !empty($_POST['password'])) {
					if (count($this->db->db->query("SELECT * FROM `users` WHERE `email` =" . '\'' . $email . '\'' . " AND `password` =" . '\'' .$password .'\'')) > 0) {
						$message = 'Вы успешно авторизовались!';
						$_SESSION['id'] = $this->db->db->query("SELECT `id` FROM `users` WHERE `email` ='" . $email . "'")[0]['id'];
						$this->redirect();
					} else { 
						$_SESSION['message'] = 'Неверный пароль';
					}
				} else {
					$_SESSION['message'] = 'Все поля должны быть заполнены';
				};
			}
			$this->redirect();
		}
		public function get_content() {

		}
		
		public function redirect() {
			echo '<!DOCTYPE html>
			<html lang="en">
			<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
			</head>
			<body>
				<script>
					window.location.replace("?option=main");
				</script>
			</body>
			</html>';
		}
	}
?>