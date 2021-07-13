// 확인
console.log("나와라");

//슬라이드
setInterval(function(){
    console.log("슬라이드");

    var tg=document.querySelector(".slide");
    tg.style.left="-100%",
    tg.style.transition=".6s";

    setTimeout(function(){
        var first =tg.querySelectorAll("li")[0];
        tg.appendChild(first);
        tg.style.left="0",
        tg.style.transition="none";

    },600); //timeout
},3000); // 슬라이드

// 탭창
// 함수명 : tab

function tab(a1,a2){
    console.log("탭"+a1,a2);

    var tm = document.querySelectorAll(".tm>li");
    var tc = document.querySelectorAll(".tc>li");
    tm[a1].classList.add("on")
    tm[a2].classList.remove("on")
    tc[a1].classList.add("on")
    tc[a2].classList.remove("on")

}

// 마우스오버시 투명도
// 함수명: mos

function mos1(obj){
    obj.style.opacity="0.5";
}
function mos2(obj){
    obj.style.opacity="1";
}


//출처: https://twinparadox.tistory.com/141 [Twinparadox Factory]


//출처: https://twinparadox.tistory.com/141 [Twinparadox Factory]
    

// 팝업
// 함수명: pop

function pop(sts){
    console.log("팝업"+sts);

    var pop = document.querySelector(".pop")
    pop.style.display=sts;
}