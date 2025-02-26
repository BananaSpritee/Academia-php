<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="style.css"></script>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Maromba Academy</title>
    <script defer src="app.js" type="text/javascript"></script>
</head>
<body onload="startTime()">
<form action="resposta.php" method="post">
    <div class="fundo">
        <header class="header">
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Projetos</a></li>
                    <li><a href="#">Contato</a></li>
                    <div id="txt" style="justify-self: center; font-family: Calibri; color: white" class="hora"></div>
                </ul>
            </nav>
        </header>
        <main class="midlane">
            <div class="formulario">
                <h1>Cadastre-se</h1>
                <div class="colunas">
                    <div class="colum-1">
                        <label class="label">Nome Completo:</label>
                        <br><br>
                        <label class="label">E-mail:</label>
                        <br><br>
                        <label class="label">Número de Telefone:</label>
                        <br><br>
                        <label class="label">CPF:</label>
                        <br><br>
                        <label class="label">Altura:</label>
                        <br><br>
                        <label class="label">Peso:</label>
                    </div>
                    <div class="colum-2">
                        <input class="form-1" type="text" name="name" placeholder="Nome Completo">
                        <br>
                        <input class="form" type="text" name="email" placeholder="exemplo@gmail.com">
                        <br>
                        <input class="form" type="tel" name="number" placeholder="+00 (00) 00000-0000">
                        <br>
                        <input class="form" type="text" name="cpf" placeholder="CPF">
                        <br>
                        <input class="form" type="number" name="height" placeholder="Altura" step="any">
                        <br>
                        <input class="form" type="number" name="kg" placeholder="Peso" step="any">
                    </div>
                </div>
                <form name="post" action="./?post=true" method="post" enctype="multipart/form-data">
                    <p style="margin-bottom: 10px; text-align: right"></p>
                    <input type="file" name="file" style="margin-left: 150px; margin-right: 150px"/>
                </form>
                <br>
                <input class="botao" type="submit" value="Enviar">
            </div>
            <div class="maps">
                <iframe id="mapa"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.237046682365!2d-35.725941124094504!3d-9.66077599042803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x701459e6ce6e737%3A0x6a09fd3dd100da11!2sCentro%20de%20Forma%C3%A7%C3%A3o%20Profissional%20Gustavo%20Paiva%20(Senai%20-%20Po%C3%A7o)!5e0!3m2!1spt-BR!2sbr!4v1740513395213!5m2!1spt-BR!2sbr"
                        width="400" height="300" style="border:0; left: 100%" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </main>
        <footer>
            <div class="footer">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </footer>
    </div>
</form>
</body>
</html>