import $ from 'jquery';
const Routing = require('./Routing')
$(document).ready(function() {
    let url = Routing.generate("supprimechambre");
    let supprime = $("#delete");
    let idchambre = $("#idchambre");

    supprime.each(function() {

        $(this).click(function() {
            var identifient = $('.table').find(idchambre).html();
            if (confirm("Voulez vous supprimer\n la chambre " + numerochambre)) {
                ajax({

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