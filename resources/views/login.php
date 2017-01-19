<?php 
$title = "Login";
require 'base_layout.php';
?>
<body >
<div style="text-align:center">
	<h2> Todolist <h2>
</div>
<div style="text-align:center;margin-top:10%">
	<form action="#">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		<input class="mdl-textfield__input" type="text" id="sample3">
		<label class="mdl-textfield__label" for="sample3">email...</label>
	</div>
	</form>
	<form action="#">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		<input class="mdl-textfield__input" type="text" id="sample2">
		<label class="mdl-textfield__label" for="sample2">password...</label>
	</div>
	</form>
	<div>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="margin:16px;">
	Login
	</button>
	
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="margin:16px;">
	Sign up
	</button>
	</div>
</div>
</body>