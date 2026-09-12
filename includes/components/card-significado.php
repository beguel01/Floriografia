<a href="flor.php?id=<?= $flor['id'] ?>">
<div class="card-flor">
    <img src="assets/img/flores/<?= $flor['imagem'] ?>" alt="<?= $flor['nome'] ?>">
    <h2><?= $flor['nome'] ?></h2>
    <p><?= mb_substr($flor['significado'], 0, 200) . '...' ?></p>
</div>
</a>