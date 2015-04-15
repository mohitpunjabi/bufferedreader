$(function() {
   $('#author_list').select2();
});

$(function() {
    $('.fb-share-link').click(function(e) {
        var url = $(this).attr('href');
        alert(url);
        FB.ui({
            method: 'share',
            href: url
        }, function(response){});
        e.preventDefault();
    });
});