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
$title = "- Mente sã corpo são";

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
<div class = "sobre-post">
        <div class = "sobre-post_img">
            <img src = "/img/mentesã.jpeg">
</div>
<div class ="sobre-post_info">
    <div class = "sobre-spot_date">
          
        </div>
        <p class= "sobre-post_text">
            <div class= "sobre-post_text">
                <h1>MENTE SÃ E CORPO SÃO</h1>
<h3>1- Surgimento da Medicina:</h3>
<h5><p> Registros indicam que por volta dos anos 1700 a 1200 a.C, alguns procedimentos médicos já eram realizadas na região da Mesopotâmia.</p></h5>
<h3>2- Primeiro Hospital:</h3>
<h5><p>De acordo com documentações, o primeiro hospital com médicos e tratamentos estava localizado no Sri Lanka, no século 5 a.C. </p></h5>
<h3>3- Ambulâncias:</h3>
<h5><p>Foram criadas em 1792, pelo Barão Dominique Jean Larrey, médico de Napoleão Bonaparte, com o objetivo de retirar os soldados feridos das áreas de confronto.</p> </h5>
<h3>4-Símbolo:</h3>
<h5><p>O símbolo da medicina é o Bastão de Esculápio (serpente enrolada em um cajado de madeira).</p></h5>
 
<h5><p>Constantemente, diversos avanços medicinais trazem esperanças para a nossa sociedade.Cura de doenças, tratamentos, remédios mais eficazes etc.
Sem a medicina não teríamos qualidade de vida, pois diversas doenças não teriam tratamento e cura fazendo com que as taxas de mortalidade fossem altíssimas podendo até mesmo fazer com que a nossa população fosse dizimada por doenças com alto poder de contágio.</p></h5>


<h5><p>* Alergia e imunologia:</p>
<p>* Psiquiatria</p>
<p>* Pediatria </p>
<p>* Oftalmologia</p>
<p>* Neurologia</p>
<p>* Oncologia </p>
<p>* Ortopedia</p>
<p>* Anestesiologia:</p>
<p>* Cardiologia:</p>
<p>* Cirurgia geral:</p>
<p>* Clínica médica:</p>
<p>* Dermatologia:</p>
<p>* Endocrinologia e metabologia:</p> 
<p>* Endoscopia:</p>
<p>* Gastroenterologia:</p>
<p>* Geriatria:</p>
<p>* Ginecologia e obstetrícia: Hematologia e hemoterapia:</p>
<p>* Infectologia:</p></h5>
        </p>
    </div>
</div>
</div>
</section>


<aside>

    <h2>Ana Carolina</h2>
    <h4><li>Idade: 15 anos</li>
    <li>Turno: tarde</li>
    <li>Turma: 1121</li></h4>


</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
