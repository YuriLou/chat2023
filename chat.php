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
                        <?php
                        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                        ?>
                        
                        <div class="visualizar">
                          
                        </div>
                        <div class="mensagens">
                                <input type="hidden" name="nome" value="<?= $nome ?>">
                                <input type="text" id="mensagem">
                                <button type="submit"> Sand!</button>
                        </div>
                
                </form>

        </div>

        <script>
                function rolar() {
                        let chatDiv = document.getElementById("visualizar");
                        chatDiv.scrollTop = chatDiv.scrollHeight;
                }
        </script>
</body>

</html>