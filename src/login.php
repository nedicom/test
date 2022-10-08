<div class="container mt-4">
		<div class="row">
			<div class="col">
				<h1>Регистрация</h1>
				<form action="check.php" method="post">
					<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
					<input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
					<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
					<button class="btn btn-success">Зарегистрироваться</button><br>
				</form>
			</div>

			<div class="col">
				<h1>Вход на сайт</h1>
				<form action="auth.php" method="post">
					<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
					<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
					<button class="btn btn-success">Авторизоваться</button><br>
				</form>
			</div>

		</div>
	</div>
