$(document).ready(function(){
    $('#load').on('click', function(e){
        $.ajax({
            url: 'ajax-show.php',
            type: 'GET',
            success: function(data){
                $('#table-body').html(data);
            }
        });
    });
});