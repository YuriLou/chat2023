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
                                <input type="text" id="mensagem" name="mensagem">
                                <button type="submit">Enviar!</button>
                                
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


                function enviar(){
                        let data = new FormData();
                        data.append("mensagem", mensagem.value);
                        data.append("nome", nome.value);

                        fetch ("recebe.php", {
                                method:"POST",
                                body:data
                        }).then(function(resposta){
                                if (!resposta.ok){
                                        alert("não foi possivel enviar")
                                }
                                else{
                                        mensagem.value = "";
                                }
                });

                // receber de forma assincrona

                }
        </script>
</body>

</html>