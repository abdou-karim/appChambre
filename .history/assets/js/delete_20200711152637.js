import $ from 'jquery';
const Routing = require('./Routing')
$(document).ready(function() {
    let url = Routing.generate("supprimechambre");
    let supprime = $("#delete");
    let idchambre = $("#idchambre");
    let numchambre = $("#numchambre");
    let batiment = $("#idbatiment");
    let type = $("#idtypechambre");

    supprime.each(function() {
        var identifient = $('.table').find(idchambre).html();
        var numerochambre = $('.table').find(numchambre).html();
        var idbatiment = $('.table').find(batiment).html();
        var typechambre = $('.table').find(type).html();
        $(this).click(function() {
            if (confirm("Voulez vous supprimer\n la chambre " + numerochambre)) {

                $.ajax({
                    url: url,
                    type: "POST",
                    data: { identifient: identifient }
                    alet()
                }).done(function(reponse) {
                    alert("success");
                    console.log(reponse);
                })
            }
        })

    });

})