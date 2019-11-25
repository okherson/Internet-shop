<div class="content">
	<div class="send">
		<h2>Реєстрація:</h2>
		<form method="post" atcion="/account/register" id="reviev">
			<input type="text" name="login" required placeholder="логін">
			<input type="password" name="passwd" required placeholder="ваш пароль">
			<input type="text" name="first_name" required placeholder="ваше ім'я">
			<input type="text" name="second_name" required placeholder="ваше прізвище">
			<br>Дата вашого народження:<br>
			<input type="date" name="b_day">
			<input type="text" name="phone_number" required placeholder="Номер телефону у форматі: (063) 000 00 00">
			<input type="text" name="email" required placeholder="ваш email">
			<br>
			<button type="submit" name="submit" class="btn" value="Зареєструватися">Зареєструватися</button>
		</form>
	</div>
</div>
