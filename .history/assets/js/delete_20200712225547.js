import $ from 'jquery';
const Routing = require('./Routing')
$(document).ready(function() {
    let url = Routing.generate("deletechambre");
    let supprime = $("#delete");
    let idchambre = $("#idchambre");
    let numerochambre = $("#numerochambre");
    var identifient = $('.table').find(idchambre).html();
    var identifientnumero = $('.table').find(numerochambre).html();

    supprime.click(function() {

        $.ajax({
            url: url,
            type: "POST",
            data: { identifient: identifient }
        }).done(function(reponse) {

            location.href = "";
            alert('success');
            console.log(reponse);
        })


    })

})