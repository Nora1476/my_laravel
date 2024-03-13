//모바일메뉴
window.addEventListener("load", function () {
    const gnbMenu = document.querySelector(".mo_menu");
    const closeBtn = document.querySelector(".close");
    console.log(closeBtn);
    gnbMenu.addEventListener("click", function () {
        console.log("열기");
        document.querySelector(".mo_main").classList.toggle("on");
        document.body.classList.toggle("fixed");
    });

    closeBtn.addEventListener("click", function () {
        document.querySelector(".mo_main").classList.toggle("on");
        document.body.classList.toggle("fixed");
    });
    // 화면이 768px 이상일 때 fixed 클래스 제거
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 768) {
            document.body.classList.remove("fixed");
        }
    });
});
