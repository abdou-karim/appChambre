import $ from 'jquery';
const Routing = require('./Routing')
$(document).ready(function() {
    let url = Routing.generate("deletechambre");
    let supprime = $("#delete");
    let idchambre = $("#idchambre");



    $(this).click(function() {

        if (confirm("Voulez vous supprimer\n la chambre " + numerochambre)) {

            var identifient = $('.table').find(idchambre).html();
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


})