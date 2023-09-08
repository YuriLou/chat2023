<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat</title>
        <link rel="stylesheet" href="stylochat.css">
</head>

<body>

        <div class="container">
                <form action="actions/recebe.php">
                        <div class="visualizar">

                        </div>
                        <div class="mensagens">
                                <?php
                                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                                ?>
                                <input type="hidden" name="nome" value="<?= $nome ?>">
                                <input type="text" id="mensagem" value="mensagem">
                                <button type="submit"> Sand!</button>
                        </div>

                </form>

        </div>

        <script>
                function rolar() {
                        let chatDiv = document.getElementById("visualizar");
                        chatDiv.scrollTop = chatDiv.scrollHeight;
                }
                rolar();
                const nome = document.getElementById("nome");
                const mensagem = document.getElementById("mensagem");
                const form = document.querySelector("form");

                form.addEventListener("submit ", function(e) {
                        e.preventDefault();
                });

                function enviar() {

                };
        </script>
</body>

</html>