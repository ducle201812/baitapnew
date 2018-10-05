<html>
	<head>
		<link rel="stylesheet" href="public/css/themmoi.css">
		<form >
			<input placeholder="Tên đăng nhập" type="text" required=""> <br>
			 <input placeholder="Mật Khẩu" type="password" required="" ><br>
			<button>Thêm Mới</button> 
			<?php 
			include ('users.php'); ?>
			<?php 
			if (isset($_GET['username'])) {
				$data=[
					'username'=> $_GET['username'],
					'password'=> $_GET['password'],
				];
				$obj_users=new users();
				$obj_users->insertUser($data);
				# code...
			}
			 ?>
		</form>
	</head>
</html>