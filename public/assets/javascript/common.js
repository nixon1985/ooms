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
