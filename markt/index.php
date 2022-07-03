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

<div class = "sobre-post">
        <div class = "sobre-post_img">
            <img src = "/img/market.jpeg">
</div>
<div class ="sobre-post_info">
    <div class = "sobre-spot_date">
          
        </div>
        <p class= "sobre-post_text">
            <div class= "sobre-post_text">
                <h1>MARKETING</h1>
                <h3>Curiosidades sobre o marketing.</h3>

<h5><p> Marketing digital são ações de comunicação que as empresas podem utilizar por meio da internet, da telefonia celular e outros meios digitais, para assim divulgar e comercializar seus produtos ou serviços, conquistando novos clientes e melhorando a sua rede de relacionamentos.</p></h5>



<h3>Influência do marketing no dia a dia.</h3>

<h5><p>A psicologia do marketing é utilizada na comunicação, ela a melhora, passando para um marketing mais particular, auxiliando no posicionamento pessoal das empresas em suas atuações, na percepção de produto e fidelização. O mundo das trocas que é o marketing almeja criar conexões com os clientes, indo além das empresas.</p></h5>



<h3>Importância da sua eletiva pro meio humano.</h3>

<h5><p>marketing pessoal, quando bem praticado, atua em prol do profissional, ajudando-o a construir a carreira que deseja. Ao valorizar as suas habilidades e os seus diferenciais, ele possibilita a conquista do primeiro emprego, ganhar um aumento ou receber aquela promoção tão desejada.</p></h5>



<h3>Áreas de trabalho.</h3>

<h5><p><ol> 1. Inbound Marketing</ol></p>

<p><ol> 2. Estratégia de SEO</ol></p>

<p><ol> 3. Mídias Sociais</ol></p>

<p><ol> 4. Tráfego pago</ol></p>

<p><ol> 5. Neuromarketing</ol></p>

<p><ol> 6. Gestor de e-commerce</ol></p>

<p><ol> 7. Produção de conteúdo</ol></p>

<p><ol> 8. Marketing de Relacionamento</ol></p>

<p><ol> 9. Endomarketing</ol></p></h5>
                </p>
    </div>
</div>
</div>      
</section>

<aside>

   
   <h2>Raí Barreto</h2>
    <h4><li>Idade: 15 anos</li>
    <li>Turno: tarde</li>
    <li>Turma: 1121</li></h4>

</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
