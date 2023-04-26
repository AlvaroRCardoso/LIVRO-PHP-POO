<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livrinho do Zirinha</title>
</head>
<body>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

        $p[0] = new Pessoa("Álvaro", 19, "Homem");
        
        $p[1] = new Pessoa("Isa", 16, "Mulherao");

        $l[0] = new Livro("PHP", "Um João", 100, $p[0]);
        $l[1] = new Livro("JAVA", "Um Davi", 200, $p[1]);

        $l[1] -> abrir();
        $l[1] -> folhear(200);
        $l[1] -> avancarPag();
        $l[1] -> detalhes();

        echo "<br>
              <br>";

        $l[0] -> abrir();
        $l[0] -> folhear(78);
        $l[0] -> voltarPag();
        $l[0] -> detalhes();
    ?>
</body>
</html>