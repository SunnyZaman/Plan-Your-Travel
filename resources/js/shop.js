$(document).ready(function () {
      //Hide cards
      $("#planQuery").hide();
      $("#invoice").hide();
        var maxInputs = 4;
        var inputsWrapper= $("#travellerAges");
        var x = inputsWrapper.length; 
        var fieldCount=1; 
        updateInvoice();
        $("#addInput").click(function () {
            console.log(x);
                if(x <= maxInputs) {
                    fieldCount++; 
                    $(inputsWrapper).append(
                        '<div class="form-row"><div class="form-group col-xs-12 col-md-12">'+
                        ' <label for="age_1">Age of traveler:</label>'+
                        '<div class="input-group">'+
                      '  <input class="form-control" type="text"  name"age_'+fieldCount+'" id="age_'+fieldCount+'" type="number" min="0" required>'+
                        '<div class="input-group-append">'+
                            '<button class="btn btn-outline-secondary removeclass" type="button">Remove</button>'+
                        '</div>'+
                        '</div>'+ '</div></div>');
                    x++; 
                    updateInvoice();
                    $("#addInput").show();                    
                    // Delete the "add"-link if there is 3 fields.
                    if(x == maxInputs) {
                        $("#addInput").hide();
                         $("#lineBreak").html("<br>");
                    }
                }
                return false;
        });
        
        $("body").on("click",".removeclass", function(e){ //user click on remove text
                if( x > 1 ) {
                        $(this).parent('div').parent('div').parent('div').parent('div').remove(); //remove text box
                        x--; //decrement textbox
                        $("#addInput").show();
                        updateInvoice();
                }
            return false;
        }) 
        function updateInvoice(){
            $('#quantity').text(x);
            $('#price').text($('#totalPrice').text());
            var totals =(x*$('#totalPrice').text().split('$')[1]).toFixed(2);
            $('#totals').text('$'+totals);
            $('#subtotal').text('$'+totals);
            var tax = (totals*0.15).toFixed(2);
            $('#tax').text('$'+tax);
            var total = Number(tax)+Number(totals);            
            $('#total').text('$'+total);
        }
        
    $('#planButton').click(function(){
            var plan = $('#planTitle').text();
            openMap();
            $.ajax({
                url: "/shop/plan",
                method: "GET",
                data: { plan:plan},
                success: function (val) {
                    var result = JSON.parse(val);
                    console.log(result);
                    if(result.length===0){
                        $("#planQuery").show();
                    }
                    else{
                        var data = result[0];
                        $('#quantity').text(data.number_of_travellers);
                        $('#price').text($('#totalPrice').text());
                        var totals =(data.number_of_travellers*$('#totalPrice').text().split('$')[1]).toFixed(2);
                        $('#totals').text('$'+totals);
                        $('#subtotal').text('$'+totals);
                        var tax = (totals*0.15).toFixed(2);
                        $('#tax').text('$'+tax);
                        $('#total').text('$'+data.total_cost);
                    }
                    $("#invoice").show();

                },
                error: function (response) {
                    console.log(response);
                }

            })
    });
    $('#travellerForm').on('submit', function(e){
        e.preventDefault();
            var _token = $('input[name="_token"]').val();
            var plan = $('#planTitle').text();
            var number_of_travellers = x;
            var ages = getAges(x);
            console.log($('#totalPrice').html());
            var price = $('#totalPrice').text().split('$')[1];
            var total_cost = (x*Number(price)+(x*Number(price)*0.15)).toFixed(2);
            console.log(plan, number_of_travellers, ages, total_cost);
            
            $.ajax({
                url: "/shop/purchase",
                method: "POST",
                data: { plan:plan, number_of_travellers:number_of_travellers,ages:ages, total_cost: total_cost, _token: _token},
                success: function (result) {
                    console.log(result);
                    $("#planQuery").hide();
                },
                error: function (response) {
                    console.log(response);
                }

            })
    });
    function getAges(x){
        var ageArray =[];
        for(var i=1;i<=x;i++){
            ageArray.push($('#age_'+i).val());
        }
        console.log(ageArray);
        return ageArray.toString();
        
    }

    function openMap(){
       $("#map-canvas").append('<iframe src="https://www.google.com/maps/d/u/1/embed?mid=1uTCt_nEfZ7D5ve3RZrv62yFKJgjhCX3O" width="100%" height="500px"></iframe>');
    }
    
});