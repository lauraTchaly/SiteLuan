<?php

/**
 * Arquivo que faz a configuração incial da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

/***********************************************
 * Seus códigos PHP desta página iniciam aqui! *
 ***********************************************/

// Variável que armazena todos os artigos para exibição no HTML.
$artigos = '';

// SQL que obtém todos os artigos.
$sql = <<<SQL

SELECT art_id, art_title, art_intro, art_thumb 
    FROM articles
WHERE art_status = 'on'
    AND art_date <= NOW()
ORDER BY art_date DESC;

SQL;

// Executa a query --> '$res' contém os artigos encontrados.
$res = $conn->query($sql);

// Abre a lista de artigos.
$artigos = '<div class="items">' . "\n";

// Loop que obtém cada registro de '$res'
while ($artigo = $res->fetch_assoc()) :

    // Formata HTML de saída
    
   //AQUI PODE POR OS CÓDIGOS DOS ARTIGOS

endwhile;

// Fecha a lista de artigos.
$artigos .= '</div>';

/************************************************
 * Seus códigos PHP desta página terminam aqui! *
 ************************************************/

/**
 * Variável que define o título desta página.
 */
$title = "- Games";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>
<div class = "sobre-post">
        <div class = "sobre-post_img">
            <img src = "/img/games2.jpeg">
</div>
<div class ="sobre-post_info">
    <div class = "sobre-spot_date">
          
        </div>
        <p class= "sobre-post_text">
            <div class= "sobre-post_text">
                <h1>GAMES</h1>
       <h3> Curiosidades sobre a história dos games:</h3>

<h5><p><li>Durantes os anos 40: o primeiro jogo eletrônico como conhecemos hoje.</li></p>
<p><li>Durantes os anos 70: os jogos de arcade se espalham pelos Estados Unidos. </li></p>
<p><li>Durantes os anos 80: nasce a comunidade de gamers. </li></p>
<p><li>Durantes os anos 90: nasce a internet e tudo muda.  </li></p>
<p><li>Dos anos 2000 até a atualidade. </li></p></h5>

<h3>Influência dos games no dia a dia:</h3>

<h5><p> Os jogos eletrônicos trazem muitos benefícios aos seus usuários, desde que tenham como objetivo principal influências positivas e utilizados corretamente. Eles melhoram o raciocínio, a lógica, a percepção motora, auxilia na tomada de decisão, além de melhorar as estratégias de seus jogadores.</p></h5>

<h3>importância da sua eletiva pro meio humano:</h3>
 <h5><p> Os jogos são benéficos e já vem sendo utilizados no tratamento de algumas doenças e na recuperação de pacientes como mobilidades reduzidas, assim como servem para nos distrair, o hábito de jogar é positivo pois nos proporciona maior criatividade, concentração, memorização, disciplina e etc.</p></h5>

<h3>Áreas de trabalho:</h3>

<h5><p><ol>1. Designer de Games ou Game Designer.</ol></p>

<p><ol>2. Desenvolvedor de Software ou Programador de Games.</ol></p>

<p><ol>3. Animador de Jogos ou Artista Visual.</ol></p>

<p><ol>4. Designer de Som ou Engenheiro de Áudio.</ol></p>

<p><ol>5. Testador de games – perfeita para quem se interessa em games.</ol></p></h5>
        </p>
    </div>
</div>
</div>
</section>

<aside>

<h3 class="h3">Gabriel Ferreira</h3>
    <h4><li>Idade: 16 anos</li>
    <li>Turno: tarde</li>
    <li>Turma: 1121</li></h4>

    <h2>Juan</h2>
    <h4><li>Idade: 15 anos</li>
    <li>Turno: tarde</li>
    <li>Turma: 1121</li></h4>

</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
