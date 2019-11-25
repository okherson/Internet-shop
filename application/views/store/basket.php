<?php 

if (!empty($basket)) {
echo'<p><br>Наші вітання, '.$_SESSION['login'].'.<br>Для завершення покупки - підтвердіть замовлення, після чого з вами зв\'яжеться адміністратор для узгодження деталей.</p>';
	echo '<form method="post" action="/store/basket"><table class="basket_table">
			<tr>
				<th>Порядковий номер</th>
				<th>Зображення товару</th>
				<th>Назва товару</th>
				<th>Ціна товару</th>
				<th>Кількість товару</th>
				<th></th>
			</tr>';
		$i = 0;
		$tot_summ = 0.00;
		foreach ($basket as $key => $value) {
			$tot_summ += $value[0]['cost'];
			echo '<tr>
					<td>'.$i.'</td>
					<td><img src="'.$value[0]['photo_location'].'" alt="" height="50px"></td>
					<td>'.$value[0]['title_ru'].'</td>
					<td>'.$value[0]['cost'].'uah</td>
					<td>1</td>
					<td><button class="add_prod" name="dell_from_basket" value='.$value[0]['id'].'>Видалити</button></td>
				</tr>';
			$i++;
		}
		echo '<tr>
					<td colspan="3">Загальна вартість складає</td>
					<td colspan="3">'.$tot_summ.' uah</td>
				</tr></table>';
		echo '<button class="button" name="sale_confirmation" value="Підтвердити покупку">Підтвердити покупку</button>
			</form>';
	}
	else {
		echo'<p>Наші вітання, '.$_SESSION['login'].'.<br>Ви покищо нічого не додали до своєї корзини.</p>';
	}
?>
