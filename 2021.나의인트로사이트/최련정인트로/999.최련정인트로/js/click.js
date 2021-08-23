$(function () { //// jQB

    $(".skill li").click(function(){
        // 호출확인
        console.log("탭클릭!");

        // 클릭된 li에 클래스 on넣기 + 다른 li는 클래스 on빼기
        $(this).addClass("on").siblings().removeClass("on");
        // addClass(클래스명) - 선택요소에 클래스추가하기
        // removeClass(클래스명) - 선택요소에 클래스제거하기
        // siblings() - 선택요소 이외의 형제요소들 선택하기



    });//////// click ////////////////

}); ///////////// click ////////////////