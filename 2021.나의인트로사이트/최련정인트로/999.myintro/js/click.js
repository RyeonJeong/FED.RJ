$(function () { //// jQB

    // 스킬박스 나오기
    $(".skill li").click(function () {
        // 호출확인
        console.log("탭클릭!");

        $(this).addClass("on").siblings().removeClass("on");

      }); //////// click ////////////////

});