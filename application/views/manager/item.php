<div class="site_content">
	<form class="adm_desizion" method="post" name="" action=""><br>

		<h2>Відобразити всі товари</h2>
		<input class="btn_adm_des" type="submit" name="all_goods" value="Відобразити товари"><br>
		<?php
			if (!empty($item)) {
				echo '<table class="content">
						<tr>
								<th>id</th>
								<th>title_ru</th>
								<th>cost</th>
								<th>item_number</th>
								<th>description</th>
								<th>photo_location</th>
								<th>vehicle_type</th>
							</tr>';
				foreach ($item as $key => $value) {
					echo '<tr>
							<td>'.$value['id'].'</td>
							<td>'.$value['title_ru'].'</td>
							<td>'.$value['cost'].'</td>
							<td>'.$value['item_number'].'</td>
							<td width="35%">'.$value['description'].'</td>
							<td>'.$value['photo_location'].'</td>
							<td>'.$value['vehicle_type'].'</td>
						</tr>';
				}
				echo '</table>';
			}
		?>
		<br><hr>
		<h2>Внести зміни до конкретного товару</h2>
		<input class="inp_adm" name="id" type="text" placeholder="Id товару, який потрібно змінити"><br><br>
		Обрати розділ товарув який потрібно внести змінити
		<select name="desizion">Обрати категорію яку потрібно змінити
			<option value="title_ru">Назва товару</option>
			<option value="cost">Ціна товару</option>
			<option value="item_number">Кількість наявного товару</option>
			<option value="description">Опис товару товару</option>
			<option value="photo_location">Відносна адресса збереження зображення</option>
			<option value="vehicle_type">Категорія товару</option>
		</select><br><br>
		<input class="inp_adm" name="new_inf" type="text" placeholder="Ввести актуальні дані"><br>
		<input class="btn_adm_des" type="submit" name="change_item_data" value="Внести зміни"><br>
	
	<br><hr>
	<h2>Видалити товар з бази даних</h2>
		<input class="inp_adm" name="del_item_by_id" type="text" placeholder="ID_order"><br>
		<input class="btn_adm_des" type="submit" name="del_me" value="Видалити">

	<h2>Додати новий товар до бази даних</h2>
		<input class="inp_adm" name="title_ru" type="text" placeholder="Назва товару"><br>
		<input class="inp_adm" name="cost" type="text" placeholder="Ціна товару"><br>
		<input class="inp_adm" name="item_number" type="text" placeholder="Кількість наявного товару"><br>
		<input class="inp_adm" name="description" type="text" placeholder="Опис товару товару"><br>
		<input class="inp_adm" name="photo_location" type="text" placeholder="Відносна адресса збереження зображення"><br>
		<input class="inp_adm" name="vehicle_type" type="text" placeholder="Категорія товару"><br>
		<button type="submit" name="add_item" class="btn_adm_des" value="add_user">Add item</button>

	</form> 

</div>