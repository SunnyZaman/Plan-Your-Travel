$(document).ready(function () {
    $('#searchForm').on('submit', function(e){
        e.preventDefault();
            var _token = $('input[name="_token"]').val();
            var search = $('#search').val();  
            console.log(search);
                      
            $.ajax({
                url: "/home/search",
                method: "POST",
                data: {search:search, _token: _token},
                success: function (result) {
                    let value = JSON.parse(result); 
                    console.log(value);
                    $(".results-container").show();
                    $('#search').val(""); 
                    if(value.length!==0){
                    $(".caption").text("Results");
                    $("#results-table").show();
                    var table='';
                    /* loop over each object in the array to create rows*/
                    $.each( value, function( index, item){
                        var attraction_data = JSON.parse(item.attraction_data);
                         table+= '<tr><th scope="row">'+index+'</th>'
                          +'<td>'+item.continent+'</td>'
                          +'<td>'+item.country+'</td>'
                          +'<td>'+item.attraction+'</td>'
                          +'<td>'+attraction_data.location+'</td>'
                        +'</tr>'
                    });
                    $("#results-tbody").html( table );
                }
                else{
                    $("#results-table").hide();
                    $(".caption").text("No Results");
                }

                    jQuery.noConflict();
                    $('#searchModal').modal('toggle');
                },
                error: function (response) {
                    console.log(response);
                }

            })
    });
})