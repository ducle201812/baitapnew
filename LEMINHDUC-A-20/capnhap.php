
<?php 
include 'users.php';
 ?>
 <?php
 $obj_users =new users();
 $id='';
 $user='';
 if (isset($_GET['id'])) {
 	$id=$_GET['id'];
 	$user=$obj_users->findUser($id);

  	# code...
  } else{
  	die('error');
  }
  ?>
  <form >
			<input placeholder="Tên đăng nhập" type="text" required="" value="<?php echo $user['username'] ?>"> <br>
			 <input placeholder="Mật Khẩu" type="password" required="" value="<?php echo $user['password'] ?>"><br>
			<button>Thêm Mới</button> 
</form>
<?php 
if (isset($_GET['username'])) {
	$data=[
		'username'=>$_GET['username'],
		'password'=>$_GET['password'],
		'id'=>$_GET['id']
	];
	$obj_users->updateUser($data);
	# code...
} 
?>