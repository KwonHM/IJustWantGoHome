<?php 
require_once('dbconfig.php');

$name = $_POST['user_name'];
$Difficulty = $_POST['difficulty'];
$Genre = $_POST['Genre'];
$date = date("Y-m-d");

$sql = 'insert into score_board(U_number,Genre,user_name,Difficulty,achieve_date) values(null, "'.$Genre.'", "'.$name.'", "'.$Difficulty.'", "'.$date.'")';
$result = $db->query($sql);

if($result) {
	$U_number = $db->insert_id;
	echo 1;
	return;
}else{
	echo "문제가 발생하였습니다.";
	return;
}
?>