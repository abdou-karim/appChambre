import $ from 'jquery';
const routes = require('../../public/js/fos_js_routes.json');
import Routing from '../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js';
Routing.setRoutingData(routes);
$(document).ready(function() {
    let url = Routing.generate("supprimechambre");
    let supprime = $("#delete");
    let idchambre = $("#idchambre");
    let numchambre = $("#numchambre");

    supprime.each(function() {
        var identifient = $('.table').find(idchambre).html();
        var numerochambre = $('.table').find(numchambre).html();
        $(this).click(function() {
            alert('ok');
        })

    });

})