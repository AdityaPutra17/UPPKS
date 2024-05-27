document.onreadystatechange = function () {
    if (document.readyState !== "complete") {
        document.querySelector(".loader-wrapper").style.visibility = "visible";
    } else {
        document.querySelector(".loader-wrapper").style.display = "none";
    }
};
