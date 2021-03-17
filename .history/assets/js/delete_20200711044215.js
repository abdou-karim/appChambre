import $ from 'jquery';
const Routing = require('../../../vendor/friend')
$(document).ready(function() {
    let url = Routing.generate("supprimechambre");
    let supprime = $("#delete");
    let idchambre = $("#idchambre");
    let numchambre = $("#numchambre");

    supprime.each(function() {
        var identifient = $('.table').find(idchambre).html();
        var numerochambre = $('.table').find(numchambre).html();
        $(this).click(function() {
            if (confirm("Voulez vous supprimer\n la chambre " + numerochambre)) {

                $.ajax({
                    url: url,
                    type: "POST",
                    data: { identifient: identifient }
                }).done(function(reponse) {
                    alert("success");
                    console.log(reponse);
                })
            }
        })

    });

})