const slider = document.querySelector(".slider");

document.addEventListener("click", (e) => {
    const items = document.querySelectorAll("li");

    if (e.target.matched(".next")) {
        console.log("next");
    }

    if (e.target.matched(".prev")) {
        console.log("prev");
    }
});
