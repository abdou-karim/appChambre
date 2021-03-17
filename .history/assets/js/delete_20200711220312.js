import $ from 'jquery';
const Routing = require('./Routing')
$(document).ready(function() {
    let url = Routing.generate("deletechambre");
    let supprime = $("#delete");
    let idchambre = $("#idchambre");
    let numerochambre = $("#numerochambre");
    var identifient = $('.table').find(idchambre).html();

    supprime.click(function() {
        if (confirm("Voulez vous supprimer\n la chambre "))
            $.ajax({
                url: url,
                type: "POST",
                data: { identifient: identifient }
            }).done(function(reponse) {

                alert('success');
                console.log(reponse);
            })
    })

})