<?php


$produto1 = [
    "produto" => "Teclado",
    "imagem" => '<img src="img/Tecladorevas.jpg" alt="Teclado revas">',
    "descricao" => "Revas By Roland - Teclado 61 Teclas KB330",
    "preco" => 1500,
];



$produto2 = [
    "produto" => "Guitarra",
    "imagem" => '<img src="img/guitarra.jpg" alt="Guitarra">',
    "descricao" => "GUITARRA ELÉTRICA - MURIEL'S - DEEP DARK (PRETA) - GTBM1954 - TONANTE",
    "preco" => 900,
];


$produto3 = [
    "produto" => "Violão",
    "imagem" => '<img src="img/violao.jpg" alt="violão">',
    "descricao" => "GIANNINI N-14Bk Violão Acústico, Preto",
    "preco" => 370, 
];


$produto4 = [
    "produto" => "Bateria",
    "imagem" => '<img src="img/bateria.jpg" alt="Bateria">',
    "descricao" => "Bateria Acústica 2T Preto NY-F1RST",
    "preco" => 2100,
];


$produto5 = [
    "produto" => "ContraBaixo",
    "imagem" => '<img src="img/baixo.jpg" alt="Contrabaixo">',
    "descricao" => "Contrabaixo Millenium Natural 5 Cordas Tagima",
    "preco" => 1500,
];




$produtos = [
    $produto1,
    $produto2,
    $produto3,
    $produto4,
    $produto5,

];

?>
<!--Css Bootstrap-->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<div class="container"></div>
   <h1 class="mt-5"> </h1>
<h1 style="text-align:center">Instrumentos Musicais</h1>
<hr>

<table class="table table-hover striped mt-5">
    <thead class="table-dark">
        <tr>
            <th>Produtos</th>
            <th>Imagem</th>
            <th>Descrição</th>
            <th>Preço</th>

        </tr>
    </thead>

    <tbody>
        <?php foreach ($produtos as $cadaProduto) {
            echo '<tr>';

            echo '<td>' . $cadaProduto['produto'] . '</td>';
            echo '<td>' . $cadaProduto['imagem'] . '</td>';
            echo '<td>' . $cadaProduto['descricao'] . '</td>';
            echo '<td>' . $cadaProduto['preco'] . '</td>';

            echo '</tr>';
        }
        ?>
    </tbody>


</table>
</div>