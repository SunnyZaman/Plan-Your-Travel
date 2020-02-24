$(document).ready(function () {
    $('#reviewForm').on('submit', function(e){
        e.preventDefault();
        var title = $('#title').val();
        var rating = $('#rating').val();
        var description = $('#description').val();
        console.log(rating);
        if (title !== '' || rating !=='' || description !=='') {
            var selected_place =  $('#selectedPlace').text();
            var review_date = new Date()+"";
            var _token = $('input[name="_token"]').val();
            console.log(selected_place, title, _token, rating, description, review_date);
            
            $.ajax({
                url: "/review/store",
                method: "POST",
                data: { selected_place: selected_place, title: title, _token: _token, rating: rating, description: description, review_date:review_date },
                success: function (result) {
                    console.log(result)
                    $('#reviewModal').hide();
                    location.reload();
                },
                error: function (response) {
                    console.log(response);
                }

            })
        }
    });
});