// $(function(){
//     var  windowHeight = $(window).height(),
//          navtop = $('.navTop').innerHeight(),
//          navBottom = $('.navBottom').innerHeight();

//          $('.slider').height(windowHeight - (navBottom + navtop));
// });

// $(function(){
//     var windowHeight = $(window).height(),
//         navTop = $('.navTop').innerHeight(),
//         navBottom = $('.navBottom').innerHeight();

//         $('.slider').height(windowHeight - (navTop + navBottom ));


//     $('.list ul li').on('click' , function(){
//         $(this).addClass('active').siblings().removeClass('active')
//     });


// }); 

$('.ui.sidebar')
.sidebar('toggle');

$('.text').click(function(){
    $('.sidebar , .backNAv, .overlay').addClass('open')
})
$('.close').click(function(){
    $('.sidebar , .backNAv, .overlay').removeClass('open')
})

$('.ui.toggle.checkbox').click(function(){
    $('.index').toggleClass('Dark')
})
 
