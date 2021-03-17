import $ from 'jquery';
$(document).ready(function() {
    $("#delete").click(function() {
        let url;
        let supprime = $("#delete");
        supprime.dialog({
            dialogClass: "no-close",
            buttons: [{
                text: "OK",
                click: function() {
                    $(this).dialog("close");
                }
            }]
        });
    })
})