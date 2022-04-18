<div class="container">
<form action='?option=main&method=create' method="POST">
	<div class="form-group">
		<label for="exampleInputEmail1">Заголовок</label>
		<input name="title" type='text' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		<small id="emailHelp" class="form-text text-muted">Введите название вашей заявки</small>
	</div>
	<div class="form-group">
		<label for="exampleSelect1">Выберите:</label>
		<select name='choose1' class="form-control" id="exampleSelect1">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleSelect2">Выберите:</label>
		<select name='choose2' multiple class="form-control" id="exampleSelect2">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleTextarea">Описание</label>
		<textarea name='text' class="form-control" id="exampleTextarea" rows="3"></textarea>
	</div>
	<fieldset class="form-group">
		<legend>Radio buttons</legend>
		<div class="form-check">
			<label class="form-check-label">
			<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Show" checked>
			Показать
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
			<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Don't show">
			Не показывать
			</label>
		</div>
	</fieldset>
	<div class="form-check">
		<label class="form-check-label">
		<input name='callback' default="False" value='True' type="checkbox" class="form-check-input">
		Связаться с вами?
		</label>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php 
	if (isset($_SESSION['message']))
	{
		echo htmlspecialchars($_SESSION['message']);
		unset($_SESSION['message']);
	}
?>