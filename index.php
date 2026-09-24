<?php
require 'data/flores.php';

$titulo_pagina = 'Floriografia';
include 'includes/header.php';
?>
<section id="capa">
    <img src="assets/img/flores/inicial.jpeg" alt="" class="capa-imagem">
    <div class="capa-indicador">
        <span>Role para descobrir</span>
        <div class="seta-baixo"></div>
    </div>
</section>

<section id="introducao" class="reveal">
    <p class="pergunta-inicial">Você já parou para pensar que uma flor pode dizer muito mais do que imaginamos?</p>
    <span class="divisor-ornamental"></span>
    <p class="texto-inicial reveal">
        Além de sua beleza e diversidade, as flores carregam histórias, significados e curiosidades que atravessam gerações.
        Neste site, você vai descobrir o fascinante universo da floriografia, e conhecer um pouco mais sobre a botânica, a ciência que estuda as plantas.
        Esse projeto foi inspirado no livro de floriografia de Jessica Roux, que influenciou na criação deste site para que ele seja também uma inspiração para os jovens cultivarem e apreciarem a botânica.
    </p>
<h1>Introdução</h1>
<p>EPA (Etec Portas Abertas)
    Tema do Projeto: O projeto é baseado em um livro de Floriografia de mesmo nome,
    onde além de abordar o significado e origem das flores, também terá informações
    sobre suas estruturas, cultivo, reprodução e polinização.
    Além das explicações ditas pelas integrantes e um jogo da memória de mesmo tema, o
    projeto também contará com o auxílio de um site que reuniria todas as informações em
    abas específicas para cada tema (Floriografia, Botânica e Polinização)</p>
</section>

<section id="floriografia" class="reveal">
    <h1>Floriografia</h1>
    <p>A floriografia é a "linguagem das flores" — um sistema simbólico em que cada 
        flor (e às vezes suas cores e combinações) carrega um significado específico, 
        permitindo transmitir sentimentos sem precisar de palavras. Ficou popular na Era 
        Vitoriana, quando expressar emoções abertamente era mal visto socialmente: 
        presentear alguém com certas flores, ou combinações delas, podia declarar amor,
         ciúme, luto ou desconfiança — até a forma de entregar o buquê podia mudar a mensagem.

         Cada flor tinha um significado vindo de mitologia, religião, literatura ou características da 
         própria planta (cor, formato, toxicidade, época de floração). Rosas vermelhas, por exemplo, 
         simbolizam amor apaixonado, enquanto a cicuta, por ser venenosa, ficou associada à morte. Vários 
         "dicionários" de floriografia foram publicados na época pra ajudar a decifrar essas mensagens — 
         e é exatamente esse tipo de compilação que inspirou o livro da Jessica Roux, referência do seu projeto.</p>
</section>

<section id="polinizacao" class="reveal">
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
<div class="container-carrossel">
    <div class="container-carrossel-card">
        <section id="flores" class="cu">
            <?php foreach ($flores as $flor) {
                include './includes/components/card-significado.php';
            } ?>
        </section>
    </div>
</div>


<?php include 'includes/footer.php'; ?>