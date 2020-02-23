$(document).ready(function () {
    //Hide dropdowns
    $("#countryContainer").hide();
    $("#attractionContainer").hide();

    $('.dynamic').change(function () {
        if ($(this).val() !== '') {
            var select = $(this).attr("id");
            var table = "";
            switch (select) {
                case "continent":
                    table = "countries"
                    $('#country').val('');
                    $('#attraction').val('');
                    $("#countryContainer").show();
                    $("#attractionContainer").hide();
                    break;
                case "country":
                    table = "attractions"
                    $('#attraction').val('');
                    $("#attractionContainer").show();
                    break;
                default:
                    break;
            }
            var value = $(this).val();
            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "/home/fetch",
                method: "POST",
                data: { select: select + "_id", value: value, _token: _token, dependent: dependent, table: table },
                success: function (result) {
                    console.log(result)
                    $('#' + dependent).html(result);
                },
                error: function (response) {
                    console.log(response);
                }

            })
        }
    });
    $('#popularPlaces').change(function () {
        if ($(this).val() !== '') {
            var value = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "/home/placeData",
                method: "POST",
                data: { value: value, _token: _token},
                success: function (result) {
                    console.log(result)
                    // $('#' + dependent).html(result);
                },
                error: function (response) {
                    console.log(response);
                }
            })
        }
    });
});