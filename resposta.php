<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="style.css"></script>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
<form action="resposta.php" method="post">
    <div class="fundo">
        <div class="midlane">
            <div class="formulario">

                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $number = $_POST['number'];
                    $cpf = $_POST['cpf'];
                    $peso = floatval($_POST['kg']);
                    $altura = floatval($_POST['height']);
                    $imc = $peso / ($altura * $altura);

                    echo "<p><strong>Nome Completo:</strong> $name</p>";
                    echo "<p><strong>E-mail:</strong> $email</p>";
                    echo "<p><strong>Telefone:</strong> $number</p>";
                    echo "<p><strong>CPF:</strong> $cpf</p>";
                    echo "<p>Seu IMC É: " . number_format($imc, 2) . "</p>";
                }

                ?>
                <?php

                $folder = __DIR__ . "/uploads/";

                if (!file_exists($folder) || !is_dir($folder)) {
                    mkdir($folder, 0755);
                }

                var_dump([
                    "filesize" => ini_get("upload_max_filesize"),
                    "postsize" => ini_get("post_max_size"),
                ]);

                $getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
                var_dump($_FILES);

                if ($_FILES && !empty($_FILES['file']['name'])) {
                    $fileUpload = $_FILES['file'];
                    var_dump($_FILES);

                    $allowebTypes = [
                        "image/jpeg",
                        "image/png",
                        "application/pdf"
                    ];
                } elseif ($getPost) {
                    echo "<p class='trigger warning'>Whoops parece que o arquivo que você selecionou é grande demais!</p>";
                } else {
                    if ($_FILES) {
                        echo "<p class='trigger warning'>Selecione um arquivo antes de Enviar!</p>";
                    }
                }

                var_dump(scandir(__DIR__ . "/uploads/"));
                ?>
            </div>
        </div>
    </div>
</form>
</body>
</html>