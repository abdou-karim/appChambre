import $ from 'jquery';
const Routing = require('./Routing')
$(document).ready(function() {
    let url = Routing.generate("deletechambre");
    let supprime = $("#delete");
    let idchambre = $("#idchambre");
    var identifient = $('.table').find(idchambre).html();

    supprime.click(function() {
        if (confirm("Voulez vous supprimer\n "))
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