let counter = 0;
let slidesAll = $('.slider-line-item').length;
let firstSlide=$('.slider-line-item').eq(0).clone();
$('.slider-line').append(firstSlide)


$('.slider-right-button').click(function(){
    if (counter !=6){
        counter++;
        $('.slider-line').animate({
            'left': (-100*counter) +'%'
        },500);
    } else {
        counter++;

    $('.slider-line').animate({
        'left': (-100*counter) +'%'
    },500, function(){
        $('.slider-line').css('left', 0);
    });
    counter =0;
}
});

$('.slider-left-button').click(function(){

    if(counter == 0){
        counter = slidesAll;
        $('.slider-line').animate({
            'left' : (-100 * counter) + '%'
        },0, function(){
            $('.slider-line').animate({
                'left' : (-100 * --counter) + '%'  
        },500);
    })


    } else{
        counter--;
        $('.slider-line').animate({
            'left' : (-100 * counter) + '%'
        },500);
    }
});