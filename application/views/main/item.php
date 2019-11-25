<?php 
	if (!empty($item)) {
		echo '
			<table class="item_tab">
				<tr>
					<td rowspan="4" class="tab_img" ><img height="500px" width="400px"src='.$item[0]["photo_location"].'></td>
					<td rowspan="1" colspan="3" width="78%">NAME: '.$item[0]['title_ru'].'</td>
				</tr>
				<tr>
					<td rowspan="1" colspan="3">PRICE: '.$item[0]['cost'].' uah</td>
				</tr>
				<tr>
					<td rowspan="1" colspan="3">AMOUNT NUMBER: '.$item[0]['item_number'].'</td>
				</tr>
				<tr>
					<td rowspan="1" colspan="4">description: '.$item[0]['description'].'</td>
				</tr>
			</table>';
	}
?>
