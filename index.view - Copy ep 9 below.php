<!html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Document </title>
	<style>
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Task For The Day</h1>
	<ul>
		<?php foreach ($task as $heading => $value): ?>
			<li><strong><?= ucwords($heading); ?></strong> 
				<?php if($heading == 'completed:') : ?>
					<?php if($value) : ?>
						<span>&#9989;</span>
					<?php else: ?>
						<?= "Incomplete"; ?>
					<?php endif; ?>
				<?php else: ?>
					<?= $value; ?>
				<?php endif; ?>
				
			</li>
		<?php endforeach; ?>
		<!-- <?php foreach ($task as $heading => $value): ?>
			<li><strong><?= ucwords($heading); ?></strong> 
				<?php
					
					if($heading == 'completed:'){
						// echo $value ? 'Finished' : 'Incomplete';
						if($value){ 
				?>
							echo "<span>&#9989;</span>";
				<?php   }
						else{
							echo "Incomplete";
						}
						die();
						
					}


					echo $value;
				?> 
			</li>
		<?php endforeach; ?> -->
	</ul>

</body>
</html>