AutoType("words", "Fuel your ambition with MaP", 100);

function project() {
    window.open("https://github.com/mouleshleo/web-essentials");
}

new kursor({
    type: 2,
    removeDefaultCursor: true,
    color: '#000000',

});

document.addEventListener("DOMContentLoaded",() => {
 setTimeout(() => {
    hideLoader();
    showContent();
},3000);
});

function hideLoader() {
    const loader = document.getElementById("loader");
    loader.style.display = 'none';
}

function showContent() {
    const content = document.getElementById("content");
    content.style.display = 'block';
}
