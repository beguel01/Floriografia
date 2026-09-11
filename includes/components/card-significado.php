<?php
if (!isset($flor)) {
	return;
}
?>

<div class="card-flor">
	<img
		src="assets/img/flores/<?php echo htmlspecialchars($flor['imagem'], ENT_QUOTES, 'UTF-8'); ?>"
		alt="<?php echo htmlspecialchars($flor['nome'], ENT_QUOTES, 'UTF-8'); ?>"
	>

	<h2><?php echo htmlspecialchars($flor['nome'], ENT_QUOTES, 'UTF-8'); ?></h2>
	<p><?php echo htmlspecialchars($flor['nome_cientifico'], ENT_QUOTES, 'UTF-8'); ?></p>

	<div class="card-flor__informacoes">
		<p><strong>Significado:</strong> <?php echo htmlspecialchars($flor['significado'], ENT_QUOTES, 'UTF-8'); ?></p>
		<p><strong>Cuidados:</strong> <?php echo htmlspecialchars($flor['cuidados'], ENT_QUOTES, 'UTF-8'); ?></p>
		<p><strong>Floração:</strong> <?php echo htmlspecialchars($flor['floracao'], ENT_QUOTES, 'UTF-8'); ?></p>
	</div>
</div>