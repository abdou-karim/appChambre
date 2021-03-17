import $ from 'jquery';
$(document).ready(function() {
    $("#delete").click(function() {
        let url;
        let supprime = $("#delete");

        supprime.click(function() {
            confirm('voulez vous supprimer')
        })
    })
})