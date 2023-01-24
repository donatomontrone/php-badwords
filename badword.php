<?php
$paragraph = $_POST["inputParagraph"];
$badWord = $_POST['badWord']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Word</title>
    <!-- Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <div class="row text-center">
                <div class="col-6">
                    <h2> Paragraph </h2>
                    <p> <?php
                        echo trim($paragraph);
                        ?> </p>
                </div>
                <div class="col-6">
                    <h2> Length </h2>
                    <p> <?php
                        echo strlen($paragraph);
                        ?> </p>
                </div>
                <div class="col-6">
                    <h2> Paragraph </h2>
                    <p> <?php
                        echo str_replace($badWord, '***', $paragraph);
                        ?> </p>
                </div>
                <div class="col-6">
                    <h2> Length </h2>
                    <p> <?php
                        echo strlen(str_replace($badWord, '***', $paragraph));
                        ?> </p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>