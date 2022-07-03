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
$title = "- Investigação Criminal";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>
<div class = "sobre-post">
        <div class = "sobre-post_img">
            <img src = "/img/ic.jpeg">
</div>
<div class ="sobre-post_info">
    <div class = "sobre-spot_date">
          
        </div>
        <p class= "sobre-post_text">
            <div class= "sobre-post_text">
                <h1>INVESTIGAÇÃO CRIMINAL</h1>
                <h3>Genética Forense</h3>
<h5><p>Genética forense é o estudo do DNA para ajudar na resolução de casos criminais. A fase moderna dessa ciência vem das pesquisas de um médico chamado Alec Jeffreys, da Universidade de Leicester, na Inglaterra. Em 1984, ele criou um meio de identificar as pessoas através de fragmentos do material genético. Foi ele quem nomeou, inclusive, as características únicas do DNA de uma pessoa como “impressões digitais do DNA”. Com essas descobertas, uma lasca de unha ou um pelo que os criminosos deixem para trás pode condená-lo. Ao mesmo tempo, também é possível inocentar pessoas que estavam presas injustamente.
Claro que, com o tempo, as técnicas foram se aprimorando cada vez mais: hoje, é possível identificar o DNA de uma pessoa com amostras menores, como em bitucas de cigarro ou guardanapos usados. Porém, essa técnica de DNA só funciona com comparação e uma amostra sem suspeito não é de grande valia. Por isso, países como Inglaterra e Estados Unidos possuem cadastros de código genético de todas as pessoas que já foram acusadas de algum delito. No Brasil, um decreto de março de 2013 instituiu o Banco Nacional de Perfis Genéticos e a Rede Integrada de Bancos de Perfis Genéticos.</p></h5>
<h5><p>Mas nem tudo são flores. Em 2009, por exemplo, a polícia alemã descobriu que uma suspeita, que eles perseguiam há 16 anos por conta de vários assassinatos era, na verdade, uma mulher que trabalhava na fábrica do algodão usado nos cotonetes da investigação. Ou seja, não tinha nada a ver com nenhum crime, exceto o descuido da fábrica para não contaminar o material que produzia.</p></h5>

<h3>Perícia Criminal</h3>

<h5><p>A perícia criminal é importante, pois ela é capaz de sanar as dúvidas dos juízes, comprovando ou não a existência de um crime. Para formar o convencimento do juiz e dos jurados, a prova é um meio indispensável, elas são coletadas para que se prove o que foi alegado aos autos. Portanto, a função do perito é contribuir com a justiça, buscando a verdade dos fatos através de suas análises e pesquisas, de forma imparcial, ademais, importante ressaltar que as atividades desenvolvidas pelos profissionais, são condicionadas a cada estado.</h5></p>

<h4 class="h4">o profissional concursado em investigação forense pode atuar nas seguintes áreas:</h4>

<h5><p><ul><li> Perícia Contábil e Financeira;</li></ul></p>

<p><ul><li>Perícias Documentoscópicas;</li></ul></p>

<p><ul><li>Perícias em Locais de Crime;</li></ul></p>

<p><ul><li>Perícias em Bombas e Explosivos;</li></ul></p>

<p><ul><li>Perícias em Balística;</li></ul></p>

<p><ul><li>Perícias em Informática;</li></ul></p>

<p><ul><li>Perícias em Audiovisual e Eletrônicos;</li></ul></p>

<p><ul><li>Perícias em Genética Forense;</li></ul></p>

<p><ul><li>Perícias de Veículos;</li></ul></p>

<p><ul><li>Perícias de Medicina e Odontologia Forense;</li></ul></p>

<p><ul><li>Perícias de Engenharia;</li></ul></p>

<p><ul><li>Perícias de Química Forense;</li></ul></p>

<p><ul><li>Perícias de Meio Ambiente;</li></ul></p>

<p><ul><li>Perícias sobre o Patrimônio Cultural.</li></ul></p></h5>

<h5><p>A profissão do perito requer muita dedicação,  cuidado e atenção, pois há uma grande dedicação para que os crimes sejam solucionados o mais rápido possível, fazem o possível para estar sempre se qualificando, pois os crimes vão se modernizando e os peritos precisam acompanhar essa evolução.</p></h5>
                </p>
    </div>
</div>
</div>      
    
</section>

<aside>

    <h2>Giovana</h2>
    <h4><li>Idade: 15 anos</li>
    <li>Turno: tarde</li>
    <li>Turma: 1121</li></h4>
    
    <h3 class="h3">Mateus Monteiro</h3>
    <h4><li>Idade: 16 anos</li>
    <li>Turno: tarde</li>
    <li>Turma: 1121</li></h4>

</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
