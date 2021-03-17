import $ from 'jquery';
$(document).ready(function() {
    let url;
    let supprime = $("#delete");
    let idchambre = $("#idchambre");
    supprime.each(function() {
        var identifiant = $('.table').find(idchambre).html();
        var num = $('.table').find(numchambre).html();
        $(this).click(function() {
            if (confirm("Voulez vous supprimer"))
        })

    });

})