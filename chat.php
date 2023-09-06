<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat</title>
        <link rel="stylesheet" href="stylochat.css">
</head>

<body>

        <img src="images/dog rebaixado.webp" alt="">
        <form action="actions/recebe.php">
                <div class="container">
                        <input type="hidden" name="username" value="<?php filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS) ?> ">
                        <label for="mensagem">Digite a mensagem: </label>
                        <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Digite aqui a mensagem a ser enviada"></textarea>
                </div>

                <div class="container">
                        <button>ENVIAR!</button>
                </div>
        </form>

</body>

</html>