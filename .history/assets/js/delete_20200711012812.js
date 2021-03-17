import $ from 'jquery';
$(document).ready(function() {
    let url;
    let supprime = $("#delete");
    let idchambre = $("#idchambre");

    $('.table tr').each(function() {
        var identifiant = $(this).find(td).eq(0).html(); //L'index 0 permet de récupérer le contenu de la première cellule de la ligne
        $("#delete").click(function() {

        })
    });

})