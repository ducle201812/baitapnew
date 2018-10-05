<?php 
include ('./users.php');
$obj_users =new users();
//xoa
$id='';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$obj_users->deleteUser($id);

}
//tiềm kiếm
$keyword='';
if (isset($_GET['keyword'])) {
	$keyword=$_GET['keyword'];
}
$users=$obj_users->getUsers($keyword);



 ?>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">

	<link href="public/css/styles.css" rel="stylesheet" type="text/css">

	<script src="public/js/jquery-2.1.4.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="type-12">
			<div class="container">
				<div class="col-md-12 boder">
					<div class="type">Our Team </div>
					<form>
						<input type="text" name="keyword" placeholder="Nhập từ khóa">
						<input type="submit" value="Tiềm Kiếm">
					</form>
					<div class="row">
						<?php foreach($users as $user):  ?>
						<div class="col-md-4 col-sm-6 col-xs-12 class">
							<a href="bai1.php?id=<<?php echo $user['id'] ?>">Xóa</a>
							<a href="capnhap.php?id=<<?php echo $user['id'] ?>">Cập Nhập</a>
							<div class="hover">
								<div class="images">
									<img src="public/images/hình hay.jpg">

								</div>
							</div>
							<div class="tieu">
								<a href="#"><h3><?php echo $user['usersname'] ?> </h3></a>
							</div>
						</div>

					<?php endforeach; ?>
					</div>

				</div>
			</div>
		</div>
	</header>
	
</body>
</html>