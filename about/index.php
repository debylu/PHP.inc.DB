<?php

// Importa o arquivo de configuração:
require($_SERVER['DOCUMENT_ROOT'] . '/inc/_config.php');

/***********************************************
 * Todo o código PHP desta página começa aqui! *
 ***********************************************/

// Define o título da página:
$page_title = 'Sobre...';

/**************************************************************
 * Define o conteúdo "visual" da página:                      *
 * Observe que temos, por padrão, um design com duas colunas. *
 * A coluna "aside", porém, será opcional para cada página.   *
 **************************************************************/
$page_content = <<<HTML

<article>

    <h2>{$page_title}</h2>
    <p> Olá seja bem vindo, nesse cantinho tu verá a força e união de uma familia, comum em nosso país né?</p>
    <p> A família é louca, mas também muito divertida. Criada pela matriarca Maria Neusa, que soube ensinar, em meio a muitos desafios de criar sozinha seus três filhos, os melhores príncipios para honestidade e pessoa de bem. Quem os conhecem veêm pelas suas atitudes que ali não houve falha nos ensinamentos e nem desvios de caráter. Você é o que escolher ser e plantar e tudo que lhe foi tirado ou deixado de ensinar ela deu em dobro pelos seus filhos que sempre pensam em retribuir, porque amor familiar não há.</p>

</article>

<aside>

    <h3>Conteúdo complementar</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint incidunt assumenda, ab dignissimos illum.</p>

</aside>

HTML;

/************************************************
 * Todo o código PHP desta página termina aqui! *
 ************************************************/

// Importa template da página:
require($_SERVER['DOCUMENT_ROOT'] . '/inc/_template.php');
?>