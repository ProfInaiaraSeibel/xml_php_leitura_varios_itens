<?php

// Carrega o arquivo com XML e transforma o arquivo XML em Objeto
$xml = simplexml_load_file('arquivo.xml');

// Exibe as informações do XML
echo "Título: " . $xml->titulo . "<br>";
echo "Relatório: " . $xml->relatorio . "<br><br><br>";

// Percorre todos os registros de vendas
foreach ($xml->venda as $registro) :
    echo "Id da venda: " . $registro->id . "<br>";
    echo "Nome: " . $registro->nome . "<br>";
    echo "E-mail: " . $registro->email . "<br>";
    echo "Celular: " . $registro->celular . "<br><br>";

    // Percorre todos os registros de vendas
    foreach ($registro->produtos->produto as $produto) :
        echo "Id do produto: " . $produto->id . "<br>";
        echo "Nome do produto: " . $produto->nome . "<br>";
        echo "Quatidade: " . $produto->quantidade . "<br><br>";

    endforeach;

    echo "<hr>";
endforeach;
