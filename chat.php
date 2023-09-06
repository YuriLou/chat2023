<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat</title>
        <link rel="stylesheet" href="stylochat.css">
</head>

<body>

        <div class="chat">
                <img src="images/dog rebaixado.jpg" alt="">
                <form action="actions/recebe.php">
                        <?php
                        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                        ?>
                        <div class="container">
                                <input type="hidden" name="nome" value="<?= $nome ?>">
                                <textarea name="mensagem" id="mensagem" cols="400" rows="8" placeholder="Digite aqui a mensagem a ser enviada"></textarea>
                        </div>
                        <div class="container">
                                <button>ENVIAR!</button>
                        </div>
                </form>

        </div>

</body>

</html>