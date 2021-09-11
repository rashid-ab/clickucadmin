//Written By Mian Roshan//
$(document).ready(function() {
    $('aside.large-dev-s.side-nav').slimScroll({
        height: '100vh',
    });
    $( 'aside.large-dev-s.side-nav' ).on( 'mousewheel DOMMouseScroll', function ( e ) {
        var e0 = e.originalEvent,
            delta = e0.wheelDelta || -e0.detail;

        this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
        e.preventDefault();
   });
   $('.field_editor').on('click', function(){
     target_ele =  $(this).parent().find('input');
     target_ele.removeAttr('readonly');
     target_ele.focus();
   });
   $('.field-set input').focusout(function(){
       $(this).attr('readonly', true);
   });
   $('.tabs-trigger').on('click', function(){
    var tabs_id = $(this).attr('data-id');
    $('.tabs-trigger').removeClass('active');
    $(this).addClass('active');
    $('.tab-items-list').removeClass('active');
    $('#'+tabs_id).addClass('active');
    $('.tab-items-list').slideUp();
    $('#'+tabs_id).slideDown();
  });
  $('.checkbox-toggle').on('change', function(){
    var status =$(this).parent().parent().find('.check-status');
      if($(this).prop('checked')==true){
        status.text('on');
      }
      else{
        status.text('off');
      }
    });
});
$(window).resize(function(){
    if($(window).width() > 992){
    $('.modal').modal('hide');
   }
});