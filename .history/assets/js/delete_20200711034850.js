import $ from 'jquery';
$(document).ready(function() {
    let supprime = $("#delete");
    let idchambre = $("#idchambre");
    let numchambre = $("#numchambre");

    supprime.each(function() {
        var identifient = $('.table').find(idchambre).html();
        var numerochambre = $('.table').find(numchambre).html();
        $(this).click(function() {
            alert('ok');
        })

    });

})