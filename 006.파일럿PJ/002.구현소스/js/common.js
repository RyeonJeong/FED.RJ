// 파일럿PJ 공통기능 JS - common.js

$(function () { // jQB ///

  

  // 햄버거버튼 클릭시 class = "on" 토글
  $(".ham").click(function () {

    // 햄버거 버튼에 class="on" 넣기/빼기
    $(this).toggleClass("on");

    // 햄버거 버튼 클릭시 전체메뉴 보이기
    $(".mbox").fadeToggle(500);


    // 동영상 play하기 //////////////
    // 동영상은 제이쿼리에서 get(순번) 메서드에서
    // 관리되므로 get(0) 담겨있는 첫번째 동영상을 의미!
    // play() 메서드 : 동영상재생기능
    // pause() 메서드 : 동영상멈춤기능
    // 동영상 재생은 햄버거 버튼에 클래스 on있을때함!
    // $(this).is(".on") -> 클릭된 햄버거버튼에 .on있으면 true
    if ($(this).is(".on"))
      $(".bgm").get(0).play();
    else
      $(".bgm").get(0).pause();

  }); //////////// click ////////////

}); //// jQB ///