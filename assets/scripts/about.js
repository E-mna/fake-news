function functionPortraitName(element) {
    const name = element.querySelector('.portrait-name');
    const hidden = element.querySelector(".hidden-txt");
    const portrait = element.querySelector(".portrait-text");
    const click = element.dataset.state === '1' ? true : false;
    if (!click && window.matchMedia("(max-width: 1000px)").matches) {
        name.style = "position:relative; top:-329px; border-radius: 15px; padding-bottom: 239px; margin-bottom: -32px;";
        element.dataset.state = "1";
        portrait.style = "margin-top: -299px;";
        hidden.style = "visibility: visible; position: relative; top: -470px; left: 30px;";
    } else if (window.matchMedia("(max-width: 1000px)").matches) {
        name.style = "";
        portrait.style = "";
        element.dataset.state = "0";
        hidden.style = "visibility: hidden";
    }
}

// document.getComputedStyle("about-banner", ":background-image").animate(
    //     document.getElementById("about-banner").animate(
function functionBg() {
    document.getElementById("about-banner").animate(
        [
            // étapes/keyframes
            { transform: "translateX(0px)" },
            { transform: "translateX(50vw)" },
            { transform: "rotate(90deg)" },
        ],
        {
            // temporisation
            duration: 1000,
            iterations: 1,
        },
    );
}