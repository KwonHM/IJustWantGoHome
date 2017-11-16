<meta charset="utf-8">
<?php 

require_once('dbconfig.php');


$id = $_POST['id'];
$pss = $_POST['passwd'];

$sql = 'select * from member where U_id ="'.$id.'"';
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);


if($row['U_id'] != '') {
	
	$sql = 'select U_passwd from member where U_id = "'.$id.'" and U_passwd ="'.$pss.'"';
	$result = $db->query($sql);
	$row = mysqli_fetch_assoc($result);

	if($row['U_passwd'] != ''){
	
	$sql = 'select * from member where U_id ="'.$id.'"';
	$result = $db->query($sql);
	$row = mysqli_fetch_assoc($result);

		session_start();	
		$_SESSION['user_id'] = $id;
		$_SESSION['user_lv'] = $row['level'];
 		?>
		<script type="text/javascript">
			alert("로그인 되었습니다");
		</script>
		<meta http-equiv='refresh' content='0;url=../index.html'>
		<?php

		return;
	}else {
		?>
		<script type="text/javascript">
			alert("아이디나 비밀번호가 맞지 않습니다.");
			history.back();
		</script>
		<?php
		
	}
		return;

}else {
	?>
		<script type="text/javascript">
			alert("아이디나 비밀번호가 맞지 않습니다.");
			history.back();
		</script>

	<?php

}
?>
