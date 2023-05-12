$(document).ready(function () {
    $('#status').click(function () {
        var pnr = $('.pnr').val();
        $.ajax({
            url: 'index.php/welcome/get_status',
            dataType: "JSON",
            data: { pnr: pnr },
            success: function (data) {
                $('.train_name').html(data.trainName);
                $('.train_number').html(data.trainNumber);
                $('.journey_date').html(data.dateOfJourney);
                $('.distance').html(data.distance);
                $('.numberofpassengers').html(data.numberOfpassenger);
                $('.boardingPoint').html(data.boardingPoint);
                $('.reservationUpto').html(data.reservationUpto);
                $('.chartStatus').html(data.chartStatus);
                $('.loading').fadeOut('slow');
            }
        });
    });
});

$(document).ready(function () {
    $('#status').click(function(){
        $('.loading').show();
    })
})
$(window).on('load',function(){
    $('.loading').fadeOut('slow');
}) 