// Show or hide button
window.onscroll = function () {

    let btn = document.getElementById("topBtn");

    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
};

// Scroll to top
document.getElementById("topBtn").addEventListener("click", function () {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

});