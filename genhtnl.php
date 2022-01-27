<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Генератор</title>
</head>
<body>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="mb-3">
            <form action="generator.php" method="get" id="form">
                <div class="mb-3">
                    <label> <select id="operation" class="form-select" aria-label="Default select example"
                                    name="operation">
                            <option disabled>Выберите тип данных</option>
                            <option>VARCHAR</option>
                            <option>INTEGER</option>
                        </select>
                </div>

                <p><label>Длина:<input type="number" name="light" class="form-control" id="light"
                                       aria-describedby="emailHelp"></p>

        </div>
        <label></label><button type="submit" id="result" class="btn btn-primary">Расчитать</button>
</body>
</html>