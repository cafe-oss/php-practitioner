<?php require 'views/partials/head.php'; ?>
	<h1>List of names</h1>
	
	<?php foreach ($users as $user) :?>
		<li><?= $user->name; ?></li>
	<?php endforeach; ?>

	<h2>Submit your name</h2>

	<form method="POST" action="/names">
		<input type="text" name="name">
		<button type="submit">Submit</button>
	</form>

<?php require 'views/partials/footer.php'; ?>