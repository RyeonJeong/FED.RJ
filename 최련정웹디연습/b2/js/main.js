// 슬라이드

setInterval(function(){
    var tg = document.querySelector(".slide");
    tg.style.top = "-100%",
    tg.style.transition = ".6s";

    setTimeout(function(){
        var first = tg.querySelectorAll("li")[0];
        tg.appendChild(first);
        tg.style.top = "0",
        tg.style.transition = "none";
    },600);
},3000);


// 탭창
// 함수명 :tab
function tab(a1,a2){
    console.log("탭창확인"+a1,a2);

    var tc = document.querySelectorAll(".tc>li");
    var tm = document.querySelectorAll(".tm>li");

    tm[a1].classList.add("on");
    tc[a1].classList.add("on");
    tm[a2].classList.remove("on");
    tc[a2].classList.remove("on");

};

// 팝업창
// 함수명: pop
function pop(sts){
    console.log("팝업확인"+sts);

    var pop = document.querySelector(".pop");
    pop.style.display=sts;
}