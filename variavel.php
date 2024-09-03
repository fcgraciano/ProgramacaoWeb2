<?php include "cabecalho.php"; ?>
<style>
.card{
    margin-top:20px;
}
    </style>
<h1>Variaveis em PHP </h1>



<div class="card">
    <div class="card-header">Declaração e Inicialização:</div>
  <div class="card-body">
    Em PHP, você pode declarar uma variável começando com o sinal de dólar ($). Não é necessário especificar o tipo da variável; o PHP detecta o tipo automaticamente.    
  </div>
  <img src="variavel1.png" class="card-img-bottom" alt="...">
</div>



<div class="card">
<div class="card-header">Nomes de Variáveis:</div>
  <div class="card-body">
        Os nomes das variáveis devem começar com uma letra ou um sublinhado (_), seguidos por letras, números ou sublinhados.
        Exemplo: 
        <ul>
            <li>$idade_1 </li> 
            <li>$meu_nome</li> 
            <li>$total_2024</li>
        </ul>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Concatenando Strings
    </div>
    <div class="card-body">
        Para concatenar strings, use o ponto (.).
    </div>
    <img src="variavel2.png" class="card-img-bottom" alt="...">
</div>

<div class="card">
    <div class="card-header">
        Variáveis Superglobais:
    </div>
    <div class="card-body">
        <p>Existem variáveis superglobais que estão sempre disponíveis, como $_GET, $_POST, $_SESSION, $_COOKIE, e $_SERVER.</p>
        <p> Elas são úteis para acessar dados de formulários e informações do servidor.</p>
    </div>
    <img src="variavel3.png" class="card-img-bottom" alt="...">
</div>

<div class="card">
    <div class="card-header">
    Escopo de Variáveis
    </div>
    <div class="card-body">
        <p>Variáveis declaradas dentro de uma função têm escopo local e não são acessíveis fora da função, a menos que você use a palavra-chave global.</p>
    </div>
    <img src="variavel4.png" class="card-img-bottom" alt="...">
</div>
<div class="card">
    <div class="card-header">
    Constantes
    </div>
    <div class="card-body">
        <p>Para definir uma constante, que é um valor fixo que não pode ser alterado, use a função define().</p>
    </div>
    <img src="variavel5.png" class="card-img-bottom" alt="...">
</div>

<div class="card">
    <div class="card-header">
    Variáveis Variáveis
    </div>
    <div class="card-body">
        <p>PHP permite usar o valor de uma variável como o nome de outra variável.</p>
    </div>
    <img src="variavel6.png" class="card-img-bottom" alt="...">
</div>

<div class="card">
    <div class="card-header">
    Tipos de Dados e Conversão
    </div>
    <div class="card-body">
        <p>PHP é uma linguagem fracamente tipada, então você não precisa se preocupar muito com a conversão de tipos, mas é útil saber que isso acontece automaticamente em muitas situações.</p>
    </div>
    <img src="variavel7.png" class="card-img-bottom" alt="...">
</div>

<?php include "rodape.php"; ?>