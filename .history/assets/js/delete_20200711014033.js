import $ from 'jquery';
$(document).ready(function() {
    let url;
    let supprime = $("#delete");
    let idchambre = $("#idchambre");
    supprime.each(function() {
        var identifiant = $('.table').find(idchambre).html();
        $(this).click(function() {

        })
        alert(identifiant);
    });
    // $('.table tr').each(function() {
    //     var identifiant = $(this).find(idchambre).html(); //L'index 0 permet de récupérer le contenu de la première cellule de la ligne
    //     $("#delete").click(function() {

    //         alert("ok" +
    //             identifiant);
    //     })
    // });

})