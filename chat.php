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
                <form action="actions/recebe.php" method="post">
                        <div class="visualizar" id="visualizar">

                        </div>
                        <div class="mensagens">
                                <?php
                                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                                ?>
                                <input type="hidden" name="nome" id="nome" value="<?= $nome ?>">
                                <input type="text" id="mensagem" name="mensagem">
                                <button type="submit">Enviar!</button>

                        </div>

                </form>

        </div>

        <script>
                let chatDiv = document.getElementById("visualizar");
                const nome = document.getElementById("nome");
                const mensagem = document.getElementById("mensagem");
                const form = document.querySelector("form");

                function rolar() {

                        chatDiv.scrollTop = chatDiv.scrollHeight;
                }
                rolar();

                form.addEventListener("submit", function(e) {
                        e.preventDefault();
                        enviar();
                });


                function enviar() {
                        let data = new FormData();
                        data.append("mensagem", mensagem.value);
                        data.append("nome", nome.value);

                        fetch("actions/recebe.php", {
                                        method: "POST",
                                        body: data
                                })
                                .then(function(resposta) {
                                        if (!resposta.ok) {
                                                alert("não foi possivel enviar")
                                        } else {
                                                mensagem.value = "";
                                        }
                                        console.log(resposta);
                                });

                        // receber de forma assincrona
                        function receber() {
                                fetch("actions/ler.php")
                                        .then(function(resposta) {
                                                return resposta.json();
                                        })
                                        .then(function(resposta) {
                                                resposta.forEach(function(r) {
                                                        let div=document.createElement('div');
                                                        div.innerHTML += `<strong>Nome: ${r.nome}</strong><br>${r.mensagem}`;
                                                        rolar();
                                                })

                                        })

                        }
                        setInterval(receber, 30000);
                        receber();

                }
        </script>
</body>

</html>