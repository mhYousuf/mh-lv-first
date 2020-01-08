$('.cat').click(function(){
    var id = $(this).attr('id');
    $('.cat_details').fadeOut(300);
    $('.cat_details_'+id).fadeIn(300);
});