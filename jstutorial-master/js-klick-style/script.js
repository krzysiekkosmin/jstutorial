function funcCiemny(){
    document.querySelector('body').style.backgroundColor = "#193870";
    document.getElementById('container').style.backgroundColor = "#000066";
    document.getElementById('header').style.backgroundColor = "#301379";
    document.getElementById('center').style.backgroundColor = "#003300";
    document.getElementById('footer').style.backgroundColor = "#660066";
    document.getElementById('footer').style.display = "none";
}

function funcJasny(){
    document.querySelector('body').style.backgroundColor = "#FFFFCC";
    document.getElementById('container').style.backgroundColor = "#3691f7";
    document.getElementById('header').style.backgroundColor = "#0066FF";
    document.getElementById('center').style.backgroundColor = "#00FF00";
    document.getElementById('footer').style.backgroundColor = "#FF66CC";
    document.getElementById('footer').style.display = "flex";
}
