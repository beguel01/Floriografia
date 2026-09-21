<a href="flor.php?id=<?= $flor['id'] ?>">
<div class="card-flor">
    <h2><?= $flor['nome'] ?></h2> <p><?= $flor['nome_cientifico'] ?></p>
    <p><?= mb_substr($flor['significado'], 0, 150 ) . '...' ?></p>
</div>
</a>