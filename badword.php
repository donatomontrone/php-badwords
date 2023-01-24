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
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./img/download.png" alt="BadWord logo" width="60" height="60">
                    <h1 class="d-inline-block vertical-aling-middle">Censor bad words</h1>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center g-3 align-items-stretch">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header"> Paragraph </div>
                        <div class="card-body">
                            <h3 class="card-title"> <?php
                                                    echo trim($paragraph);
                                                    ?> </h3>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                        <div class="card-header"> Length </div>
                        <div class="card-body">
                            <h3 class="card-title text-center"> <?php
                                                                echo strlen(trim($paragraph));
                                                                ?> </h3>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header"> Paragraph </div>
                        <div class="card-body">
                            <h3 class="card-title"> <?php
                                                    echo str_replace($badWord, '***', $paragraph);;
                                                    ?> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card">
                        <div class="card-header"> Length </div>
                        <div class="card-body">
                            <h3 class="card-title text-center"> <?php
                                                                echo strlen(str_replace($badWord, '***', $paragraph));
                                                                ?> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>