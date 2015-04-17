$(function() {
   $('#author_list').select2();
});

$(function() {
    $('.fb-share-link').click(function(e) {
        var url = $(this).attr('href');
        FB.ui({
            method: 'share',
            href: url
        }, function(response){});
        e.preventDefault();
    });
});

$(function() {
    $("#editorToolbar button").click(function() {
        var $editor = $("#content");
        var caretPos = document.getElementById("content").selectionStart;
        var textAreaTxt = $editor.val();
        var txtToAdd = $("#templates #" + $(this).attr('for')).html();

        $editor.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos))
            .focus()
            .selectRange(caretPos + txtToAdd.length);
    });
});

$.fn.selectRange = function(start, end) {
    if(!end) end = start;
    return this.each(function() {
        if (this.setSelectionRange) {
            this.focus();
            this.setSelectionRange(start, end);
        } else if (this.createTextRange) {
            var range = this.createTextRange();
            range.collapse(true);
            range.moveEnd('character', end);
            range.moveStart('character', start);
            range.select();
        }
    });
};