import $ from 'jquery';
require('imports-loader?define=>false,this=>window!datatables.net')(window, $)
require('imports-loader?define=>false,this=>window!datatables.net-bs4')(window, $)

$(document).ready(function() {
    alert('ok');
    $('.table').DataTable();
})