var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay:{
        delay: 3000,
        disableOnInteraction: false,
    },

 });


//  $(document).ready(function(){
//     $(function(){
//         $("#playlist li").on("click", function () {
//             $("#videoarea").attr({
//                 src: $(this).attr("movieurl"),
//             });
//         });
//         $('#videoarea').attr({
//             src:$("#playlist li").eq(0).attr("movieurl")
//         });
//     });
//  });
