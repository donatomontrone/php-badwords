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
            <div class="row">
                <div class="col-12">
                    <form action="badword.php" method="post">
                        <div class="mb-3">
                            <label for="inputParagraph" class="form-label">Paragraph</label>
                            <textarea class="form-control" id="inputParagraph" name="inputParagraph" rows="4"
                                placeholder="Enter a paragraph to check"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="badWord" class="form-label">Bad word</label>
                            <input type="text" class="form-control" id="badWord" name="badWord"
                                placeholder="Enter the word to censor">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Invia</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>