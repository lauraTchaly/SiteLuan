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
$title = "- Marketing";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>

    <?php

    // Exibe todos os artigos.
    echo $artigos;

    ?>

</section>

<aside>

    <?php

    // Obtém os artigos mais visitados para a variável $mv.
    $mv = mostViewed();

    // Se existem artigos mais visitados, exibe eles...
    if ($mv) echo "<h3>Mais visitados</h3>{$mv}";
    ?>

</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
