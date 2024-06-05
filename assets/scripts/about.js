let click = false;

function functionPortraitName1() {
    const portName = document.getElementById('portrait-name1');
    if (!click && window.matchMedia("(max-width: 900px)").matches) {
        portName.style = "position:relative; top:-329px; border-radius: 15px; padding-bottom: 239px; margin-bottom: -32px;";
        document.getElementById('portrait-text1').style = "margin-top: -299px;";
        document.getElementById('hidden-txt1').style = "visibility: visible; position: relative; top: -470px; left: 30px;";
        click = true;
    } else {
        if (window.matchMedia("(max-width: 900px)").matches) {
            document.getElementById('portrait-name1').style = "background-color: #FAF1E8;";
            document.getElementById('portrait-text1').style = "";
            document.getElementById('hidden-txt1').style = "visibility: hidden;";
            click = false;
        }
    }
}

function functionPortraitName2() {
    const portName = document.getElementById('portrait-name2');
    if (!click && window.matchMedia("(max-width: 900px)").matches) {
        portName.style = "position:relative; top:-329px; border-radius: 15px; padding-bottom: 239px; margin-bottom: -32px;";
        click = true;
        document.getElementById('portrait-text2').style = "margin-top: -299px;";
        document.getElementById('hidden-txt2').style = "visibility: visible; position: relative; top: -470px; left: 30px;";
    } else {
        if (window.matchMedia("(max-width: 900px)").matches) {
            document.getElementById('portrait-name2').style = "background-color: #FAF1E8;";
            document.getElementById('portrait-text2').style = "";
            document.getElementById('hidden-txt2').style = "visibility: hidden;";
            click = false;
        }
    }
}

function functionPortraitName3() {
    const portName = document.getElementById('portrait-name3');
    if (!click && window.matchMedia("(max-width: 900px)").matches) {
        portName.style = "position:relative; top:-329px; border-radius: 15px; padding-bottom: 239px; margin-bottom: -32px;";
        document.getElementById('portrait-text3').style = "margin-top: -299px;";
        document.getElementById('hidden-txt3').style = "visibility: visible; position: relative; top: -470px; left: 30px;";
        click = true;
    } else {
        if (window.matchMedia("(max-width: 900px)").matches) {
            document.getElementById('portrait-name3').style = "";
            document.getElementById('portrait-text3').style = "";
            document.getElementById('hidden-txt3').style = "visibility: hidden;";
            click = false;
        }
    }
}