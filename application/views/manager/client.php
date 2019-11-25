<div class="site_content">
	<form class="adm_desizion" method="post" name="" action="/manager/client"><br>

		<h2>Відобразити список всіх користувачів </h2>
		<input class="btn_adm_des" type="submit" name="all_client" value="Відобразити користувачів"><br>
		<?php
			if (!empty($client)) {
				echo '<table class="content">
						<tr>
								<th>id</th>
								<th>login</th>
								<th>password</th>
								<th>first_name</th>
								<th>second_name</th>
								<th>b_day</th>
								<th>phone number</th>
								<th>email</th>
								<th>user type</th>
							</tr>';
				foreach ($client as $key => $value) {
					echo '<tr>
							<td>'.$value['id'].'</td>
							<td>'.$value['login'].'</td>
							<td>'.$value['passwd'].'</td>
							<td>'.$value['first_name'].'</td>
							<td>'.$value['second_name'].'</td>
							<td>'.$value['b_day'].'</td>
							<td>'.$value['phone_number'].'</td>
							<td>'.$value['email'].'</td>
							<td>'.$value['usr_type'].'</td>
						</tr>';
				}
				echo '</table>';
			}
		?>



		<br><hr>
		<h2>Внести зміни до інформації про споживача</h2>
		<input class="inp_adm" name="id" type="text" placeholder="Введіть ІД користувача в данні якого потрібно внести зміни"><br><br>
		Обрати розділ користувача в який потрібно внести змінити
		<select name="desizion" id="">Обрати категорію яку потрібно змінити
			<option value="usr_type">Статус: адмін = 1 / користувач = 0</option>
			<option value="login">Логін</option>
			<option value="passwd">Пароль</option>
			<option value="first_name">Ім'я</option>
			<option value="second_name">Прізвище</option>
			<option value="phone_number">Номер телефону</option>
			<option value="email">Електронна адреса</option>
		</select><br><br>
		<input class="inp_adm" name="new_inf" type="text" placeholder="Ввести актуальні дані"><br>
		<input class="btn_adm_des" type="submit" name="change_user_data" value="Внести зміни"><br>
	
	<br><hr>
	<h2>Видалити користувача з бази даних</h2>
		<input class="inp_adm" name="del_user_by_id" type="text" placeholder="ID_order"><br>
		<input class="btn_adm_des" type="submit" name="del_me" value="Видалити">

	<h2>Додати нового користувача до бази даних</h2>
		<input class="inp_adm" name="login" type="text" placeholder="Логін"><br>
		<input class="inp_adm" name="passwd" type="text" placeholder="Пароль"><br>
		<input class="inp_adm" name="first_name" type="text" placeholder="Ім'я"><br>
		<input class="inp_adm" name="second_name" type="text" placeholder="Прізвище"><br>
		<br>Дата народження:<br>
		<input class="inp_adm" type="date" name="b_day">
		<input class="inp_adm" name="phone_number" type="text" placeholder="Номер телефону"><br>
		<input class="inp_adm" name="email" type="text" placeholder="Електронна адреса"><br>
		<input class="inp_adm" name="admin_status" type="text" placeholder="Статус: адмін = 1 / користувач = 0"><br>
		<button type="submit" name="add_user" class="btn_adm_des" value="add_user">Add user</button>
	</form> 

</div>