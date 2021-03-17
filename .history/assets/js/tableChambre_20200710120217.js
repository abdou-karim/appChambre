import $ from 'jquery';
require('datatables.net-bs4');
$(document).ready(function(e) {
    alert("okk")
    let url = Routing.generate("alllistchambre");

    $("#table_list_chambre").DataTable({
        scrollY: "200px",
        scrollCollapse: true,
        paging: false,

        ajax: {
            url: url,
            type: "POST",
            dataSrc: "",
            dataType: "json"
        },
        columns: [
            { data: "numero" },
            {
                data: "idTypeChambre",
                render: function(data, type) {
                    return data.libelle
                }
            },
            {
                data: "idBatiment",
                render: function(data, type) {
                    return data.numero
                }
            },
            {
                data: null,
                render(data, type, row) {
                    return '<a href="" id="update" class="data"><span class="fa fa-pencil"></span></a>';
                }
            },
            {
                data: null,
                render(data, type, row) {
                    return '<a href="" id="delete" class="data"><span class="fa fa-archive"></span></a>';
                }
            }
        ]
    })

})