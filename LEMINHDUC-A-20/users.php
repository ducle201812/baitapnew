<?php 
include ('db.php');

class users extends db
{
		public function getUsers($keyword){
			if ($keyword) {
				$sql= 'SELECT *FROM users WHERE usersname LIKE"%'.$keyword.'%"';
				# code...
			}else
			{
				$sql='SELECT * FROM users';

			}
			
			$users=$this->select($sql);
			return $users;
		}
		public function delete($params){
			$sql='........cau sql...';
			$this->query($sql);
		}
		public function insert($params){
			$sql='........cau sql...';
			$this->query($sql);
		}
		public function update($params){
			$sql='........cau sql...';
			$this->query($sql);
			
		}

		public function deleteUser($id){
			$sql='DELETE FROM users WHERE id ='.$id;
			$this->query($sql);
			
		}
		public function insertUser($data){
			$sql='INSERT INTO users (`username`,`password`)'.'VALUE("'.$data['username'].'","'.$data['password'].'")';
			$this->query($sql);
			
		}
		public function findUser($id){
			$sql='DELETE FROM users WHERE id ='.$id;
			$this->query($sql);
						
		}
		public function updateUser($data){
			$sql='UPDATE `user`'.'SET `	username` ="'.$data['username'].'",'.'`password` = "'.$data['password'].'" '. 'WHERE id ='.$data['id'];
			
			$this->query($sql);
						
		}
		
}
 ?>