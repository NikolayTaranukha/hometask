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
        <form action="calcmozgi.php" method="get">
            <div class="mb-3">
                <p>
                    Первое число:<input type="number" name ="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </p>
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="3">
                    <option disabled>Выберите действие</option>
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select></p>
            </div>
            <div class="mb-3">
                <p>
                    Второе число:<input type="number" name="2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </p>
            </div>
            <button type="submit" class="btn btn-primary">Расчитать</button>
        </form>
    </div>
</div>

</body>
</html>
