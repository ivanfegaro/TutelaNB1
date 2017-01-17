$(function() {
  var moveLeft = 0;
  var moveDown = 00;

  $('a#trigger').hover(function(e) {
    $('div#pop-up').show();
      //.css('top', e.pageY + moveDown)
      //.css('left', e.pageX + moveLeft)
      //.appendTo('body');
  }, function() {
    $('div#pop-up').hide();
  });

  $('a#trigger').mousemove(function(e) {
    $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });

});

/*[[INICIO]]--MULTISELECTORES--*/
$('.selectpicker').selectpicker({
  style: 'form-control',
  size: 4
});
/*[[FIN]]--MULTISELECTORES--*/

/*[[INICIO]]--ACORDEON-INTERPONER--*/
$(document).ready(function() {
  $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('panel_activo');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('panel_activo');
  });
});

/*[[FIN]]--ACORDEON-INTERPONER--*/

/*[[INICIO]]--DOCUMENTOS-PDF*/
PDFObject.embed("../documentos/test-document.pdf#toolbar=0", "#doc_testSite", {height: "500px"});
if(PDFObject.supportsPDFs){
   console.log("Este navegador soporta PDFs en línea.");
} else {
   console.log("Los archivos PDF en línea no son compatibles con este navegador.");
}
/*[[INICIO]]--DOCUMENTOS-PDF*/

$(".tiptext").mouseover(function() {
    $(this).children(".description_td").show();
}).mouseout(function() {
    $(this).children(".description_td").hide();
});