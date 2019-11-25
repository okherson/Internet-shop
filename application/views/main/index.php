<form method="post" action="/">
	<table class="item_filter" >
		<tr>
				<td width="40%">Item filter press to chouse one of the next:</td>
				<td><button class="btn_filter" name="item" value="1" width="120px">Monowheel</button></td>
				<td><button class="btn_filter" name="item" value="2" width="100px">Electric scooter</button></td>
				<td><button class="btn_filter" name="item" value="3" width="100px">Electric bicycle</button></td>
				<td><button class="btn_filter" name="item" value="" width="100px">All vehicles</button></td>
			</tr>	
	</table>
</form>

<?php 

if (!empty($item)) {
		foreach ($item as $key => $value) {
			echo '
				<form class="info_goods_form" method="POST" action="" id='.$key.'>
					<div class="info_good">
						<table class="tab">
							<tr>
								<td rowspan="4" class="tab_img"><img src='.$value["photo_location"].'></td>
								<td rowspan="1" colspan="2" width="78%">NAME: '.$value['title_ru'].'</td>
								<td rowspan="1">';


			if (isset($_SESSION['basket']) && in_array($value['id'], $_SESSION['basket']))
				echo 'в корзині';
			echo'</td>
							</tr>
							<tr>
								<td rowspan="1" colspan="3">PRICE: '.$value['cost'].' uah</td>
							</tr>
							<tr>
								<td rowspan="1" colspan="3">AMOUNT NUMBER: '.$value['item_number'].'</td>
							</tr>
							<tr>
								<td rowspan="1" colspan="2" width="39%" ><button class="add_prod" name="add_to_basket" value='.$value['id'].'>Додати в корзину</button></td>
								<td rowspan="1" colspan="1" width="39%"><a href=""><button class="add_prod" name="item_det" value='.$value['id'].'>Детальніше</button></a></td>
							</tr>
						</table>
					</div>
				</form>';
		}
	}
?>
