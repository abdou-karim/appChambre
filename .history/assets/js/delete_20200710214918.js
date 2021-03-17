import $ from 'jquery';
$(document).ready(function() {
    $("#delete").click(function() {
        let url;
        let supprime = $("#delete");
        supprime.click(function() {

$( "#dialog" ).dialog({
  dialogClass: "no-close",
  buttons: [
    {
      text: "OK",
      click: function() {
        $( this ).dialog( "close" );
      }
    }
  ]
});
        })
    })
})