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
$title = "- Cultura POP";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>
<div class = "sobre-post">
        <div class = "sobre-post_img">
            <img src = "/img/pop.jpeg">
</div>
<div class ="sobre-post_info">
    <div class = "sobre-spot_date">
          
        </div>
        <p class= "sobre-post_text">
            <div class= "sobre-post_text">
                <h1>CULTURA POP</h1>
                <h3>Curiosidades sobre a eletiva de Cultura Pop</h3>

<h5><p>Os Simpsons estrearam em 1989 e tornaram-se a série mais longa, entrando para o Guinness World Records. Eles são a família mais famosa das séries de televisão.
No lançamento, o iPhone tinha o mesmo poder de computação que a NASA em 1969, quando lançou a histórica missão tripulada à Lua.</p>
<p>Até hoje, a série que teve mais downloads piratas na internet foi Game of Thrones.</p></h5>

<h3>Influência da Cultura Pop no dia a dia</h3>

<h5><p>A cultura pop influencia no consumo de jovens exercendo um poder que dissemina estilos e conceitos que tendem a formar grupos de associação internos. Onde estes, criam a necessidade de serem inclusos no grupo no qual se referenciam e, idealizam estilos que não estão de acordo com sua realidade.</p></h5>

<h3>Importância da eletiva no meio humano </h3>

<h5><p>A cultura pop ou cultura popular é a cultura do povo, que existe em uma sociedade moderna. Ela engloba muitas áreas, como a música, o cinema, os livros e etc. Podemos afirmar por exemplo, os filmes da Marvel Studios que estão integrados nesse meio, claro em determinados cantos do mundo as variáveis mudam, e de pessoa pra pessoa também. </p>
<p>Em geral, ela é muito importante para o entretenimento humano, com coisas para todos os gostos.</p></h5>

<h3>Profissões que podem ser seguidas:</h3>

<h5><ul><li>Cantor</li></ul>

<ul><li>Ator</li></ul>

<ul><li>Jornalista</li></ul>

<ul><li>Músico</li></ul>

<ul><li>Dançarino </li></ul>

<ul><li>Estilista</li></ul>

<ul><li>Jogador</li></ul>
 
<ul><li>Político</li></ul></h5>
                </p>
    </div>
</div>
</div>      
</section>

<aside>

    <h2>Maria Eduarda Vieira</h2>
    <h4><li>Idade: 15 anos</li>
    <li>Turno: tarde</li>
    <li>Turma: 1121</li></h4>

</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
