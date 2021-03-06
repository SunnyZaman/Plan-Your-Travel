$(document).ready(function () {
    var Fields = [];
    var Columns =[];
    var queryTable ="";
    $('#table').on('change', function () {
        if (this.value !== "") {
            var query = $("#queryTitle").text();
            console.log(query);
            queryTable = this.value.toLowerCase();
            switch (query) {
                case "Insert":
                    insertQuery(this.value);
                    break;
                case "Update":
                    updateQuery(this.value);
                    break;
                case "Select":
                    $('#queryContainer').text("");
                    selectQuery(this.value);
                    break;
                case "Delete":
                    deleteQuery(this.value);
                    break;
                default:
                    break;
            }
        }
    });

    function insertQuery(table) {
    }
    function updateQuery(table) {

    }
    function selectQuery(table) {
        var fields;
        switch (table) {
            case 'Continents':
                fields = ['continent'];
                break;
            case 'Countries':
                fields = ['continent_id', 'country'];
                break;
            case 'Attractions':
                fields = ['country_id', 'attraction', 'location'];
                break;
            default:
                break;
        }
        var checkbox = '<div class="form-row">' +
            '<div class="form-group col-xs-12 col-md-12">' +
            '<label for="table">Select Fields:</label>' +
            '<div>';
        for (var i = 0; i < fields.length; i++) {
            console.log(fields[i]);

            checkbox += '<div class="form-check form-check-inline">' +
                '<input class="form-check-input" type="checkbox" value=' +fields[i] + '>' +
                '<label class="form-check-label" for="inlineCheckbox1">' + fields[i] + '</label></div>'
        }
        checkbox += '</div></div></div></div>';
        $('#queryContainer').append(checkbox);
        $("<button/>", {
            type: 'button',
            class: 'btn btn-primary m-20',
             html: 'Submit Search Query',
           click: function(){
              getSelect();
           }
         }).appendTo("#queryContainer");
    }
    function getSelect(){
        var searchIDs = $("input:checkbox:checked").map(function(){
            return $(this).val();
          }).get(); 
          var query = searchIDs;
          if(searchIDs.length===0){
            query=['*'];
          }
          Fields= query;

          var index = query.indexOf('location');
            query[index] = 'attraction_data';
            
          console.log(query, queryTable);
          
          var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "/select/retrieve",
                method: "POST",
                data: { query: query, table: queryTable, _token: _token },
                success: function (result) {
                    console.log(result)
                    var value =JSON.parse(result)
                    createSelectTable(value);
                },
                error: function (response) {
                    console.log(response);
                }

            })
    }
   function createSelectTable(result){
       $("#selectTable").html("");
        var table= '<table class="table table-striped" id="selectTable"><thead><tr>';
        $.each( Fields, function( index, item){
            if(item==="attraction_data"){
                table+= '<th scope="col">Location</th>';
            }
            else{
                table+= '<th scope="col">'+ item+ '</th>';
            }
        });
        table+='</tr></thead><tbody>';
        $.each( result, function( index, item){
            table+='<tr>';
        $.each( Fields, function( index, head){
            console.log(head);
            console.log(item);
            if(head==="attraction_data"){
                console.log(item);
                
                var data = JSON.parse(item[head]);
                console.log(data);
                
                table+= '<td>'+data.location+'</td>';
            }
            else{
                table+= '<td>'+item[head]+'</td>';
            }
       });
       table+='</tr>';
    });
       table+='</tbody></table>';
       $('#queryContainer').append(table);

    }
    function deleteQuery(table) {
        var fields;
        switch (table) {
            case 'Continents':
                fields = ['continent'];
                break;
            case 'Countries':
                fields = ['continent_id', 'country'];
                break;
            case 'Attractions':
                fields = ['country_id', 'attraction', 'location'];
                break;
            default:
                break;
        }
        Columns = fields;
        
        var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "/table",
                method: "POST",
                data: { table: queryTable, _token: _token },
                success: function (result) {
                    console.log(result)
                    var value =JSON.parse(result)
                    createDeleteTable(value);
                },
                error: function (response) {
                    console.log(response);
                }

            })
    }
    function createDeleteTable(result){
        $("#selectTable").html("");
        var table= '<table class="table table-striped" id="selectTable"><thead><tr>';
        $.each( Columns, function( index, item){
            if(item==="location"){
                table+= '<th scope="col">Location</th>';
            }
            else{
                table+= '<th scope="col">'+ item+ '</th>';
            }
        });
        table+='</tr></thead><tbody>';
        $.each( result, function( index, item){
            table+='<tr>';
        $.each( Columns, function( index, head){
            console.log(head);
            console.log(item);
            if(head==="location"){
                console.log(item);
                
                var data = JSON.parse(item["attraction_data"]);
                console.log(data);
                
                table+= '<td>'+data.location+'</td>';
            }
            else{
                table+= '<td>'+item[head]+'</td>';
            }
       });
      table+= '<td><i class="fas fa-trash-alt '+Columns[0]+' '+ item[Columns[0]]+'" id="deleteIcon"></i></td>';
      table+='</tr>';
    });
    table+='</tbody></table>';
    $('#queryContainer').append(table);
    document.getElementById("deleteIcon").addEventListener ("click", deleteRecord, false);
    }
    function deleteRecord(event){
        console.log(event);
        console.log($(this).attr('class'));
    var id = $(this).attr('class').split("fas fa-trash-alt ")[1];
    var column = id.split(" ")[0];
    var value = id.split(" ")[1];
    console.log(column);
    console.log(value);

    console.log(queryTable);
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: "/delete/deleteRow",
        method: "POST",
        data: { table: queryTable,column:column, value:value, _token: _token },
        success: function (result) {
            console.log(result)
                },
        error: function (response) {
            console.log(response);
        }

    })
    
}
})