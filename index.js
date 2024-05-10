AutoType("words", "Fuel your ambition with MaP", 100);

function project() {
    window.open("https://github.com/mouleshleo/web-essentials");
}




new kursor({
    type: 2,
    removeDefaultCursor: true,
    color: '#000000',

});

window.addEventListener("resize",() => {
    const widthOfBox = window.innerWidth;
    const box = document.querySelector(".box");
    box.style.width = (widthOfBox - 200) + "px";
});



