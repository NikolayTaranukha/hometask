$("#result").on("click", function() {
    var first = $("#first").val().trim();
    var operation = $("#operation").val().trim();
    var second = $("#second").val().trim();

    if(first ==""){
        $("#myError").text("Введите первое число");
        } else if (operation == ""){
        $("#myError").text("Выберите операцию");
        return false;
        } else if (second == ""){
        $("#myError").text("Введите второе число");
        return false;
        }
        $("#myError").text("");

        $.ajax({
        url: 'calcmozgi.php',
        type: 'GET',
        cache:'false',
        data: {'first': first, 'operation': operation, 'second': second },
        datatype :'html',

        });
});