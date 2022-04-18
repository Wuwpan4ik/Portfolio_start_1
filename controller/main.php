<?php 
	class main extends ACore {

		public function create() {
			$title = $_POST['title'];
			$choose1 = $_POST['title'];
			$choose2 = $_POST['title'];
			$text = $_POST['title'];
			$callback = $_POST['callback'];
			if (!empty($title) && !empty($choose1) && !empty($choose2) && !empty($text)) {
				$text = "INSERT INTO `callback` (`title`, `text`, `choose1`, `choose2`, `callback`) VALUES ('". $title ."', '". $text ."', '". $choose1 ."', '". $choose2 ."', '". $callback ."')";
				$this->m->db->execute($text);
				$this->redirect();
			} else {
				return $_SESSION['message'] = 'Все поля должны быть заполнены!';
			}
			$this->redirect();
		}

		public function get_content() {
			
		}

		public function obr() {}

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