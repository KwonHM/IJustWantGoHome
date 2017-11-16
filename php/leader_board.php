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
	<title>순위</title>
</head>
<body>
<table border="1" class="view" >
			<thead>
				<tr>
					<td class="tdnumber">순위</td>
					<td class="tdtilte">이름</td>
					<td class="tdwriter">점수</td>
					<td class="tdview">달성날짜</td>
				</tr>
			</thead>
			<tbody>
		<?php
				
				$P_point = ($N_Page-1) * $P_record;
				$search_result =$_POST['search'];
				$search_filter =($_POST['filterv'])?$_POST['filterv']:0;			


		switch ($search_filter) {
					case 0:
						$sql = 'select * from score_board where user_name like "%'.$search_result.'%" and Genre = "'.$Genre.'" order by user_score desc limit '.$P_point.', '.$P_record.'';
						$res_count = 'select * from score_board where user_name like "%'.$search_result.'%" and Genre = "'.$Genre.'" order by user_score desc';
					break;
									
									
					default:
							$sql = 'select * from score_board where Genre = "'.$Genre.'" order by user_score desc limit '.$P_point.', '.$P_record.'';
						$res_count = 'select * from score_board where  Genre = "'.$Genre.'" order by user_score desc';
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
					<td class="tdnumber"><?php echo $numbering?></td>
					<td class="tdname">
					<?php echo $row['user_name']?>	
					</td>
					<td class="tdwriter"><?php echo $row['user_score']?>점</td>
					<td class="tdbirthday"><?php echo $row['achieve_date']?></td>
				</tr>
					<?php			
					$numbering = $numbering + 1;	
					}
					?>
			</tbody>
			
		</table>
</body>
</html>