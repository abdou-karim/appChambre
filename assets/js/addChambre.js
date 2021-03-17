//On récupère le select
import $ from 'jquery';
const Routing = require('./Routing')
const selectElement = $("#chambre_form_idBatiment");
const numChambre = $("#chambre_form_numero");
selectElement.change(function(e) {
    let idBatiment = selectElement.val();
    let url = Routing.generate("generernumerochambre");

    $.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        data: {
            value: idBatiment
        }
    }).done(function(response) {
        numChambre.attr("value", response);
    }).fail(function(xhr, status, error, ) {
        alert("error");
        console.log(xhr);
    })
})