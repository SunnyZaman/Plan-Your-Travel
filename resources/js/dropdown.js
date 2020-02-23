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
    $('#popularPlaces, #attraction').change(function () {
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
                    mediumImage(data.attraction_data);
                    smallImage1(data.close_place_1_data);
                    smallImage2(data.close_place_2_data);
                    smallImage3(data.close_place_3_data);                    
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
    function mediumImage(data){
        var json = JSON.parse(data);
        console.log(json);
        var id = json.title.replace(/ /g, "_");
        console.log(id);
        $('#img-med').append(
            $('<img/>')
              .attr({'src': 'uploads/'+json.image,
              'id': "image-med"})
              .attr({'width': "100%",
              'height':"100%"})
            //   .addClass("")
          );
          $(".image-medium h3").html(json.title);
          $(".image-medium p").html(json.location);
          $(".image-medium a").attr("href","/place/"+id);
    }
    function smallImage1(data){
        var json = JSON.parse(data);
        console.log(json);

        $('#img1-sm').append(
            $('<img/>')
              .attr({'src': 'uploads/'+json.image,
              'id': "image-med"})
              .attr({'width': "100%",
              'height':"100%"})
          );
          $(".image1-small h3").html(json.title);
          $(".image1-small p").html(json.location);
          $(".image1-small a").attr("href","http://www.google.com");
    }
    function smallImage2(data){
        var json = JSON.parse(data);
        console.log(json);

        $('#img2-sm').append(
            $('<img/>')
              .attr({'src': 'uploads/'+json.image,
              'id': "image-med"})
              .attr({'width': "100%",
              'height':"100%"})
          );
          $(".image2-small h3").html(json.title);
          $(".image2-small p").html(json.location);
          $(".image2-small a").attr("href","");

    }
    function smallImage3(data){
        var json = JSON.parse(data);
        console.log(json);

        $('#img3-sm').append(
            $('<img/>')
              .attr({'src': 'uploads/'+json.image,
              'id': "image-med"})
              .attr({'width': "100%",
              'height':"100%"})
          );
          $(".image3-small h3").html(json.title);
          $(".image3-small p").html(json.location);
          $(".image3-small a").attr("href","");
    }
});