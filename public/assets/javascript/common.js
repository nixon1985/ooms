function loadRemotePage(actionlink){

    $.ajax({
        url: actionlink,
        context: document.body
      }).done(function(result) {

        var inject = document.createElement('script');
        inject.src = 'assets/vendor/pace-progress/pace.min.js';
        document.getElementsByTagName('head')[0].appendChild(inject);

        $("#inner-content").html(result);
      });
}


function getComboBox(routName,htmlID){
    var html = '';
    $.ajax({
        type: "GET",
        url: routName,
        context: document.body
    }).done(function(result) {
        html +='<option value="0">Choose...</option>';
        $.each(result, function(i,data) {
            html +='<option value="'+data.id+'">'+data.text+'</option>';
        });
        $('#'+htmlID).html(html);
    });
}
