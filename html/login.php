<?php
echo'
<div class="hero-unit" style="color:white;background-color:black">
	<h1>PROJECT WALLET</h1>
	<p><br>To continue, please fill with the main password, and the number of the wallet you want to check.</p>
	<br>
	<form method="POST" class="form-horizontal">		
		<div class="input-pretend">
			<span class="add-on span2">Password : </span>
			<input type="password" id="inputPassword" name="password" placeholder="Password" class="span2">
		</div>
		<br>
		<div class="input-pretend">
			<span class="add-on span2">Wallet: </span>
			<input type="text" id="inputText" name="wallet" placeholder="1000" class="span2">
		</div>
		<br>
		<div class="input-pretend">
			<span class="add-on span2"></span>
			<input type="submit" id="button" name="login" value="Log in" class="btn btn-info span2">
		</div>
	</form>
</div>
';
?>