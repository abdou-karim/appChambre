import $ from 'jquery';
$(document).ready(function() {
    let url;
    let supprime = $("#delete");
    let idchambre = $("#idchambre");
    supprime.each(function() {
        var identifient = $('.table').find(idchambre).html();
        var numerochambre = $('.table').find(numchambre).html();
        $(this).click(function() {
            if (confirm("Voulez vous supprimer\n la chambre" + numchambre)) {

                alert(identifient);
            }
        })

    });

})