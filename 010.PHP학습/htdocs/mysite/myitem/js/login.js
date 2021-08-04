// 로그인 페이지 JS - login.js

$(function () { ////////// jQB /////////////////////////

    //// 로그인 버튼 클릭시 유효성 검사하기 //////////////
    /// 유효성 검사내용: 아이디와 비번이 비어있지 않아야함!
    // 대상: #sbtn
    $("#sbtn").click(function (e) {

        // 기본 서브밋 이동막기!
        e.preventDefault();
        console.log("로그인검사!");

        // 모든공백제거함수 //////////////////////
        let groSpace = val => {
            let newval = val.replace(/\s/g, "");
            return newval;
        }; //////////// groSpace함수 ////////////

        // 아이디, 비번 모든공백 제거후 변수에 담기
        let mid = groSpace($("#mid").val());
        let mpw = groSpace($("#mpw").val());

        // 공백제거된 값을 다시 원래입력폼에 넣기
        $("#mid").val(mid);
        $("#mpw").val(mpw);


        // 아이디와 비번 모두 비어있는지 검사!
        if (mid === "" || mpw === "") {
            alert("아이디와 비밀번호를 모두 입력해야합니다!");
        } //////////// if ////////////////////////////////
        else {

          // AJAX로 로그인 처리 페이지 전송하기
          // POST 방식으로 처리
          // $.post(전송할페이지,전송데이터,콜백함수)

          $.post(
            // 1. 전송할페이지
            "process/loginSet.php",
            // 2. 전송데이터
            {
              "mid": mid, // 아이디
              "mpw": mpw  // 비밀번호
            },
            // 3. 콜백함수
              function(res){ // res - 결과값 전달변수

                // 1. 로그인 성공시
                if(res === "ok"){
                  // alert("로그인에 성공하였습니다!");

                  // 메인페이지로 이동하기
                  location.href = "index.php";

                } // ok시 //

                // 2. 아이디가 없는 경우
                else if(res === "no"){

                  alert("사용가능한 ID가 아닙니다");
                  
                  // 아이디,비번 지우고 아이디에 포커스
                  $("#mid").val("").focus();
                  $("#mpw").val("");

                } // no시 //

                // 3. 비밀번호 불일치
                else if(res === "again"){

                  alert("비밀번호가 일치하지 않습니다");

                  // 비번 지우고 포커스
                  $("#mpw").val("").focus();

                } // again시 //

              } // 콜백함수 //

            ); // Ajax : post ////

            
        } //////////// else /////////////////////////////


    }); ////////////// click ///////////////////

}); //////////////////// jQB /////////////////////////