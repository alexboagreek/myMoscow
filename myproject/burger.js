$('.menu-btn').click(function(e){
    e.preventDefault;
    $(this).toggleClass('menu-btn_active');
})
$('.menu-btn').click(function(){
    $('.nav').slideToggle(300);
})