<?php include_once 'header.php'; ?>

	<h1>Envoyez votre Joie du code</h1>

	<hr>

	<form action="send.php" method="POST">
		<div class="form-group">
			<label for="name">Votre nom</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Entrez votre nom">
		</div>
		<div class="form-group">
			<label for="content">Votre Joie de code</label>
			<textarea name="content" id="content" class="form-control" rows="5" placeholder="Contenu de votre Joie de code"></textarea>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>

<?php include_once 'footer.php'; ?>