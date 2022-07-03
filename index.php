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
$title = "- Neurociência";

/**
 * Inclui o cabeçalho da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

?>

<section>
<div class = "sobre-post">
        <div class = "sobre-post_img">
            <img src = "/img/neurociencia.jpeg">
</div>
<div class ="sobre-post_info">
    <div class = "sobre-spot_date">
          
        </div>
        <p class= "sobre-post_text">
            <div class= "sobre-post_text">
                <h1>NEUROCIÊNCIA</h1>
                <p>
<h3><li> O QUE É:</li></h3>
<h5><p>A neurociência é uma área de estudo relacionada à medicina que trabalha na interface de várias outras áreas de estudo, como psicologia, pedagogia, biologia, anatomia, genética, fonoaudiologia, tecnologia, física, filosofia, entre outras.</p></h5>

<h5><p>O principal propósito da neurociência é ajudar a esclarecer o que acontece no cérebro humano, desde a sua formação até o envelhecimento. Assim, com base nessas importantes informações sobre a mente humana é possível utilizar técnicas específicas que ajudam a aprimorar a educação.</p></h5>

<h3><li>INFLUENCIAS NO DIA A DIA:</li></h3>
 <h4>- APRENDIZADO</h4>
<h5><p>Com base nas pesquisas realizadas pelos especialistas em neurociência, há provas de que a aprendizagem modifica a estrutura física do cérebro, tornando-o mais funcional. A experiência de aprender afeta o cérebro que, por sua vez, acaba se beneficiando de forma positiva. Assim, o que o aluno aprende na escola tem um efeito a nível celular, levando a novos padrões de organização do cérebro.</p></h5>

<h4>- NEUROMARKETING</h4>
<h5><p>Neuromarketing é um campo que estuda o comportamento do consumidor a partir das lógicas de consumo, entendendo os desejos, impulsos e motivações que levam os indivíduos a optarem por consumir ou adquirir algum produto ou serviço.</p></h5>

<h4>- HIPNOSE</h4>
<h5><p>A hipnose é um procedimento que através da indução de um estado de profundo relaxamento (através da respiração profunda e do relaxamento muscular progressivo) permite à pessoa aceder a conteúdos internos que em estado de vigília (acordado) demoraria mais tempo a compreender, ampliando assim a consciência sobre si.</p></h5>

<h3><li> IMPORTÂNCIA PRO MERCADO DE TRABALHO:</li></h3>
<h5><p>As tecnologias utilizadas pela neurociência ajudam a criar ambientes seguros e melhoram as relações entre lideranças e equipes. A tecnologia neurocientífica começa a ser usada no mercado de trabalho para aumentar o engajamento e alimentar o propósito entre as equipes.</p></h5>

<h3><li>PROFISSÕES ENVOLVENDO NEUROCIÊNCIA:</li></h3>

<h5><ul>NEUROFISIOLOGIA: estuda as funções do sistema nervoso;</ul></h5>

<h5><ul>NEUROANATOMIA: estuda a estrutura do sistema nervoso e suas funções, dividindo-o em cérebro, coluna vertebral e nervos periféricos externos;</ul></h5>
<h5><ul>NEUROPSICOLOGIA: estuda a relação entre o sistema nervoso e as funções psíquicas;</ul></h5>

<h5><ul>NEUROCIÊNCIA COMPORTAMENTAL: área relacionada a psicologia comportamental, estuda os fatores internos (pensamentos, emoções) e sua relação com o comportamento visível (fala, gestos, entre outras);</ul></h5>

<h5><ul>NEUROCIÊNCIA COGNITIVA: estudo da capacidade cognitiva do indivíduo, que inclui o raciocínio, a memória e o aprendizado;</ul></h5>

<h3><li> CURIOSIDADES:</li></h3>

<h5><ul>1. Cerca de 75% da massa total do cérebro é composta por água.</ul></h5>

<h5><ul>2.  Pesando mais ou menos 1,5kg, representa de 2 a 3% da massa corporal, consome cerca de 20% do nosso oxigênio e de 15 a 20% da glicose.</ul></h5>

<h5><ul>3. Ele pode arquivar ou equivalente a 1.000 terabytes de informações.</ul></h5>

<h5><ul>4. O cérebro possui mais conexão do que o número de estrelas em nossa lua.</ul></h5>

<h5><ul>5. Existem de 80 a 100 bilhões de células nervosas no cérebro.</ul></h5>

<h5><ul>6. Com cerca de 1,2kg, o cérebro de Albert Einstein era um pouco menor que a média. Poucas horas depois de sua morte, seu cérebro foi retirado, cortado em 240 partes e preservado em jarros com formaldeído.</ul></h5>

<h5><ul>7. A velha premissa de que "nós só usamos" 10% do nosso mito, usamos perto de 100%.</ul></h5>

<h5><ul>8. O cérebro em produzir energia suficiente para acender uma lâmpada de 25 watts.</ul></h5>

<h3><li>PONTOS INTERESSANTES: (Links)</li></h3>
<ol>
<h5 class="link"><a href="https://youtu.be/65w0AEARt60">- podcast com um neuropsiquiatra</a></h5>
<p></p>
<h5 class="link"><a href="https://youtu.be/alsciIzdUFY(vídeo">-explicando a hipnose</a></h5>
<p></p>
 <h5 class="link"><a href="https://youtu.be/pLqi0EKHVRQ">- matéria de Karl Sagan explicando as dimensões espaciais</a></h5>
</ol>
        </p>
    </div>
</div>    

</section>

<aside>

    <h2>Luan Lucas</h2>
    <h4 class="h4"><li>Idade: 15 anos</li>
    <li>Turno: tarde</li>
    <li>Turma: 1121</li></h4>

    <h2>Maria Eduarda Brandão</h2>
    <h4 class="h4"><li>Idade: 15 anos</li>
    <li>Turno: tarde</li>
    <li>Turma: 1121</li></h4>

    

   <!-- PODE POR AQUI OS CÒDIGOS PARA OS ARTIGOS MAIS VISITADOS  -->

  

</aside>

<?php

/**
 * Inclui o rodapé da página.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
