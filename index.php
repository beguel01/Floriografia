<?php
require 'data/flores.php';

$titulo_pagina = 'Floriografia';
include 'includes/header.php';
?>

<section id="introducao">
    <h1>Introdução</h1>
    <p>EPA (Etec Portas Abertas)
Tema do Projeto: O projeto é baseado em um livro de Floriografia de mesmo nome,
onde além de abordar o significado e origem das flores, também terá informações
sobre suas estruturas, cultivo, reprodução e polinização.
Além das explicações ditas pelas integrantes e um jogo da memória de mesmo tema, o
projeto também contará com o auxílio de um site que reuniria todas as informações em
abas específicas para cada tema (Floriografia, Botânica e Polinização)</p>
</section>

<section id="floriografia">
    <h1>Floriografia</h1>
    <p>Nesta aba do site, haverá cerca de 30 espécies de flores principais com
descrições contendo seu nome científico, significado, origem e com quais outras
espécies elas combinam e seus significados.</p>
</section>

<section id="polinizacao">
    <h1>Polinização</h1>
    <p>A polinização é o processo de transferência do pólen da parte masculina da flor,
chamada antera, para a parte feminina, chamada estigma. Esse processo é
fundamental para a reprodução das plantas, pois possibilita a fecundação e,
consequentemente, a formação de frutos e sementes que darão origem a novas
plantas.
A polinização pode acontecer de forma direta, chamada autopolinização, quando o
pólen chega ao estigma da própria flor que o produziu. Também pode ocorrer de forma
cruzada, quando o pólen é levado de uma flor para outra da mesma espécie. A
polinização cruzada favorece a variabilidade genética e, por isso, é considerada mais
vantajosa para as espécies.
Na polinização cruzada, o pólen precisa ser transportado por agentes polinizadores,
que podem ser bióticos, como abelhas, borboletas, aves, morcegos e outros animais,
ou abióticos, como o vento, a água e a gravidade. Aproximadamente 80% das plantas
com flores dependem de animais para realizar a polinização.
Existem diferentes tipos de polinização de acordo com o agente responsável. A
anemofilia ocorre pelo vento e é comum em plantas com flores pequenas e discretas. A
hidrofilia acontece por meio da água, principalmente em plantas aquáticas. A
entomofilia é realizada por insetos, como abelhas, moscas, besouros, borboletas e
vespas, que são atraídos pelas cores, aromas e pelo néctar das flores. A ornitofilia
ocorre quando as aves, especialmente os beija-flores, transportam o pólen, enquanto a
quiropterofilia é realizada por morcegos.
A polinização é essencial para a manutenção da biodiversidade e para a produção de
alimentos, pois garante a formação de frutos e sementes. Muitos alimentos dependem
desse processo, e cerca de um terço das plantas cultivadas pelos seres humanos
depende da polinização realizada por animais para produzir frutos e sementes.
Após a explicação geral a respeito dos temas citados acima e de um exemplo físico (o
hibisco), o grupo apresentará o jogo da memória tematico.</p>
</section>

<section id="flores">
    <?php foreach ($flores as $flor)
{
    include './includes/components/card-significado.php';
} ?>
</section>

<section id="sobreNos">
    <h1>Sobre nós</h1>
    <p>Conteudo</p>
</section>


<?php include 'includes/footer.php'; ?>