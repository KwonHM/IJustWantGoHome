<?php 
require_once('dbconfig.php');

$name = $_POST['user_name'];
$Difficulty = $_POST['difficulty'];
$Genre = $_POST['Genre'];
$date = date("Y-m-d");
$identipication = $_SERVER['REMOTE_ADDR'];
$key = "iwantgohome";


$chk = 'SELECT * FROM score_board WHERE user_ip = HEX(AES_ENCRYPT("'.$identipication.'","'.$key.'"))';
$result = $db->query($chk);
$row = mysqli_fetch_assoc($result);


if(strlen($row['user_ip']) != 0 && $Genre == $row['Genre'] && $Difficulty == $row['Difficulty']) {
	echo "등록은 한번 밖에 하실 수 없습니다.";
	return;
}

$sql = 'insert into score_board(U_number,Genre,user_name,Difficulty,achieve_date,user_ip) values(null, "'.$Genre.'", "'.$name.'", "'.$Difficulty.'", "'.$date.'", HEX(AES_ENCRYPT("'.$identipication.'","'.$key.'")))';
$result = $db->query($sql);



if($result) {
	$U_number = $db->insert_id;
	echo 1;
	return;
}	else{
	echo "문제가 발생하였습니다.";
	return;
}
?>