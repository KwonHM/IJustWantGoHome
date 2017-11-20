<?php 
session_start();

if(!isset($_SESSION['user_last'])){
	?>
	<script type="text/javascript">
		alert("접근 권한이 없습니다");
	 	location.href = "index.html";
	</script>
	<?php
}
?>