$(document).ready(function () {
    $("#sumar").on('click', sumar);
    function sumar() {
        let number1 = $("#number1").val();
        let number2 = $("#number2").val();
        let Ruta = Routing.generate('saveOperation');
        if (number1 != "" && number2 != "") {
            $.ajax({
                type: "post",
                url: Ruta,
                data: ({number1: number1, number2: number2}),
                async: true,
                dataType: "json",
                success: function (data) {
                    console.log(data.sum);
                    $("#showSum").append(data.sum);
                }
            });
        }else{
            alert("Todos los campos son requeridos")
        }
        
    }
});