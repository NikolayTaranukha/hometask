<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Калькулятор</title>
</head>
<body>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <form action="calcmozgi.php" method="get" id="form">
            <div class="mb-3">
                <p>
                    Первое число:<input type="number"  name ="first" class="form-control" id="first" aria-describedby="emailHelp">
                </p>
            </div>
            <div class="mb-3">
                <select id="operation" class="form-select" aria-label="Default select example" name="operation">
                    <option disabled>Выберите действие</option>
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
            </div>
            <div class="mb-3">
                <p>
                    Второе число:<input type="number" name="second" class="form-control" id="second" aria-describedby="emailHelp">
                </p>
            </div>
            <button type="submit" id="result" class="btn btn-primary">Расчитать</button>
        </form>
    </div id="myError"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/calc.js"></script>
</body>
</html>
 