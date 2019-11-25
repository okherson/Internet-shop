<div class="site_content">
	<form class="adm_desizion" method="post" name="" action=""><br>

		<h2>Відобразити історію</h2>
		<input class="btn_adm_des" type="submit" name="all_hist" value="Відобразити історію"><br>
		<?php
			if (!empty($sales)) {
				echo '<table class="content">
						<tr>
								<th>id</th>
								<th>user_id</th>
								<th>item_id</th>
								<th>item_title</th>
								<th>item_cost</th>
								<th>item_number</th>
								<th>sale_date</th>
								<th>payment_confirmation</th>
								<th>delivery_confirmation</th>
							</tr>';
				foreach ($sales as $key => $value) {
					echo '<tr>
							<td>'.$value['id'].'</td>
							<td>'.$value['user_id'].'</td>
							<td>'.$value['item_id'].'</td>
							<td>'.$value['item_title'].'</td>
							<td>'.$value['item_cost'].'</td>
							<td>'.$value['item_number'].'</td>
							<td>'.$value['sale_date'].'</td>
							<td>'.$value['payment_confirmation'].'</td>
							<td>'.$value['delivery_confirmation'].'</td>
						</tr>';
				}
				echo '</table>';
			}
		?>
		<br><hr>
		<h2>Підтвердити оплату замовлення</h2>
			<input class="inp_adm" name="history_id" type="text" placeholder="ID_order"><br>
			<button type="submit" name="payment_confirmation" class="btn_adm_des" value="payment_confirmation">Підтвердити</button>
	</form> 

</div>