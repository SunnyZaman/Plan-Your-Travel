$(document).ready(function () {
    //Hide dropdowns
    $("#countryContainer").hide();
    $("#attractionContainer").hide();
    $(".imageContainer").hide();
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
            clearPlaceData();
            var value = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "/home/placeData",
                method: "POST",
                data: { value: value, _token: _token},
                success: function (val) {
                    var result = JSON.parse(val);
                    var data = result[0];
                    console.log(data);
                    mediumImage(data.attraction_image);
                    smallImage1(data.close_place_1_image);
                    smallImage2(data.close_place_2_image);
                    smallImage3(data.close_place_3_image);

                    // $('#' + dependent).html(result);
                    
                $(".imageContainer").show();
                },
                error: function (response) {
                    console.log(response);
                }
            })
        }
    });
    function clearPlaceData(){
        $('#img-med').empty();
        $('#img1-sm').empty();
        $('#img2-sm').empty();
        $('#img3-sm').empty();
    }
    function mediumImage(img){
        $('#img-med').append(
            $('<img/>')
              .attr({'src': 'uploads/'+img,
              'id': "image-med"})
              .attr({'width': "100%",
              'height':"100%"})
            //   .addClass("")
          );
    }
    function smallImage1(img){
        $('#img1-sm').append(
            $('<img/>')
              .attr({'src': 'uploads/'+img,
              'id': "image-med"})
              .attr({'width': "100%",
              'height':"100%"})
            //   .addClass("")
          );
    }
    function smallImage2(img){
        $('#img2-sm').append(
            $('<img/>')
              .attr({'src': 'uploads/'+img,
              'id': "image-med"})
              .attr({'width': "100%",
              'height':"100%"})
            //   .addClass("")
          );
    }
    function smallImage3(img){
        $('#img3-sm').append(
            $('<img/>')
              .attr({'src': 'uploads/'+img,
              'id': "image-med"})
              .attr({'width': "100%",
              'height':"100%"})
            //   .addClass("")
          );
    }
});