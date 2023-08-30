<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat GPB</title>
    <link rel="stylesheet" href="stylochat.css">
</head>
<body>
    <header></header>
    <main>
        <?php
            $check = true;
            $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if ($page && file_exists("pages/$page.php")) {
                require "chat.php";
            } else {
                require "chat.php";
            }
            ?>

    </main>
    <footer>Técnico Integrado em Informática - 21
    </footer>
</body>
</html>