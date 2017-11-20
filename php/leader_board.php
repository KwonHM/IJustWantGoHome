<?php 
require_once('dbconfig.php');

	$P_record = 10;
	$P_block = 5; 	

	$sql = 'SELECT count(*) from member';
	$result = $db->query($sql); 
	$row = mysqli_fetch_assoc($result);

	$N_Page = ($_GET['page'])?$_GET['page']:1;	
	$T_record = $row['count(*)'];
	$Genre = $_POST['Genre'];
	$Genre = 'anime';

	
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>명예의 전당</title>
</head>
<body>
<section>
  <!--for demo wrap-->
  <h1>명예의 전당</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
			<thead>
				<tr>
					<td>순위</td>
					<td>이름</td>
					<td>난이도</td>
					<td>달성날짜</td>
				</tr>
			</thead>
	</table>
	</div>
	<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">		
		<tbody>
			<?php
				
				$P_point = ($N_Page-1) * $P_record;
				$search_result =$_POST['search'];
				$search_filter =($_POST['filterv'])?$_POST['filterv']:0;			


		switch ($search_filter) {
					case 0:
						$sql = 'select * from score_board where user_name like "%'.$search_result.'%" and Genre = "'.$Genre.'" order by U_number asc limit '.$P_point.', '.$P_record.'';
						$res_count = 'select * from score_board where user_name like "%'.$search_result.'%" and Genre = "'.$Genre.'" order by U_number asc';
					break;
											
					default:
							$sql = 'select * from score_board where Genre = "'.$Genre.'" order by U_number asc limit '.$P_point.', '.$P_record.'';
						$res_count = 'select * from score_board where  Genre = "'.$Genre.'" order by U_number asc';
					break;
			}			
					//페이징
					$cnt= $db->query($res_count);	
					$M_cnt = mysqli_fetch_assoc($cnt);
					$M_record = $M_cnt['count(*)'];
					$T_page = ceil($M_record/$P_record);
					$B_print = 0;
					$numbering = 1 + $P_point;
					
					$result = $db->query($sql);
					while($row = mysqli_fetch_assoc($result))
					{
				?>
				<tr>
					<td><?php echo $numbering?></td>
					<td><?php echo strip_tags($row['user_name'])?></td>
					<td><?php echo $row['Difficulty']?></td>
					<td><?php echo $row['achieve_date']?></td>
				</tr>
					<?php			
					$numbering = $numbering + 1;	
					}
					?>
			</tbody>	
		</table>
	</div>
</section>
</div><button class="labyrinth_back laby_button">미궁 처음으로 가기</button></div>
</body>
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../js/table.js"></script>
<script type="text/javascript" src="../js/labyrinth/back.js"></script>
</html>