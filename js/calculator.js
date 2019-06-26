$("input[type='button']").click(function(){
    var url = "http://localhost/calculator/crud.php";
    var data = {param1: $(this).attr('param1'), param2: $(this).attr('param2'), param3: $(this).attr('param3')};
    $.ajax({
        method: "POST",
        url: url,
        data: data,
        success: function (result) {
            $('#rezulat').text(result);
        }

    });
});

