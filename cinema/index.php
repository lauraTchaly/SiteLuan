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
$title = "- História do Cinema";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>
<div class = "sobre-post">
        <div class = "sobre-post_img">
            <img src = "/img/cinema.jpeg">
</div>
<div class ="sobre-post_info">
    <div class = "sobre-spot_date">
          
        </div>
        <p class= "sobre-post_text">
            <div class= "sobre-post_text">
                <h1>HISTÓRIA DO CINEMA</h1>
                <h3>Curiosidades sobre a história do cinema:</h3>
 <h5><p>- A escola de cinema mais antiga fica em Moscou, Rússia, e era chamada de Instituto Estadual de Cinematografia da União, quando fundada em 1919 pelo diretor de cinema Vladimir Gardin. Agora é chamada de Universidade Estatal Russa de Cinematografia. 
Vaidade e Beleza, dirigido por Rouben Mamoulian e estrelado por Miriam Hopkins, foi o primeiro filme colorido em 1935.
Os prêmios mais antigos são os Oscars. A primeira cerimônia foi realizada em 16 de maio de 1929 no Hollywood Roosevelt Hotel em Los Angeles.</p></h5>

<h3>Influência do cinema no dia a dia:<h3>
 <h5><p>- Uma das principais ações do cinema é a capacidade de fazer o espectador se emocionar e refletir. Isso usado para tratar de questões importantes que envolvem nossa sociedade, resulta em uma ferramenta muito poderosa para atingir as pessoas de maneira diferente.</h5></p>

<h3>Importância da sua eletiva pro meio humano:</h3>
<h5><p> - O cinema pode construir, desconstruir, afirmar, desenvolver ou até mesmo negar identidades através de seus processos de produção de sentido, além de tornar a experiência do filme uma vivência real, trazendo desdobramentos para a vida em sociedade, uma vez que fornece quadros de referência para o cotidiano.</p></h5>

<h3>Áreas de trabalho:</h3>
<h5><p>- Diretor, Continuísta, Diretor de fotografia, Fotografo de cena, Diretor de produção, Assistente de câmera, Figurinista, Técnico de som, Microfonista, Cenógrafo, Roteirista, Assistente de câmera e entre outros.</p></h5>
</p>
    </div>
</div>
</section>

<aside>

<h3 class="h3">Gabriel Fernandes</h3>
    <h4><li>Idade: 15 anos</li>
    <li>Turno: tarde</li>
    <li>Turma: 1121</li></h4>

</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
