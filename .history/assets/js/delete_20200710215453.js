import $ from 'jquery';
$(document).ready(function() {
    $("#delete").click(function() {
        let url;
        let supprime = $("#delete");

        $("body").overHang({

            activity: "notification",

            message: "This is a notification message"

        })

    })
})