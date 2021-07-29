// 메인 js

// setInterval(function () {

//     console.log("인터발!");

//     $(".slide").animate({
//             top: "-100%"
//         }, 600,
//         function () {
//             var first = $(this).find("li").first();
//             $(this).append(first).css({
//                 top: "0"
//             });
//         }); //////// animate /////////////////
// }, 3000); /// 인터발함수 //////////////////
// ///////////////////////////////////////////


setInterval(function(){

    console.log("인터발");


    $(".slide").animate({
        top:"-100%"
    },600,
    function(){
        var first = $(this).find("li").first();
        $(this).append(first).css({
            top:"0"
        });
    }); // animate
},3000); // 인터발함수