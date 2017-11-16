<?php 
$score = ($_POST['score'])?$_POST['score']:0;
$Genre = $_POST['genre'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>포기하셨습니다...</title>
</head>
<body>
<form name="saveinfo">
	<input type="text" name="Genre" value="<?php echo $Genre ?>">
	<input type="text" name="user_name" maxlength="20" placeholder="이름">
	<input type="text" name="user_score" value="<?php echo $score ?>" readonly>
	<input type="submit" onclick="save_score();" value="저장하기!">
</form>
</body>
<script src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

function save_score() {	
	if(document.saveinfo.user_name.value == ""){
		alert("이름을 입력해 주세요.");
		document.saveinfo.user_name.focus();
		return;
	}
	$.ajax({
		url:"save_score.php",
		type:"post",
		data:$("form").serialize(),
	}).done(function(data) {
		if(data == 1){
			alert("저장이 완료 되었습니다.");
			location.href="leader_board.php";
		}else {
			alert(data);
		}
	})
}
</script>
</html>