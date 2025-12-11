function home(){
    document.getElementById('home').style.display = "flow-root"
    document.getElementById('firma').style.display = "none"
    document.getElementById('firma-i-instytucje').style.display = "none"
}

function oNas(){
    document.getElementById('o-nas').style.display = "flow-root"
    document.getElementById('home').style.display = "none"
    document.getElementById('serwis').style.display = "none"
    document.getElementById('kontakt').style.display = "none"
}

function serwis(){
    document.getElementById('serwis').style.display = "flow-root"
    document.getElementById('home').style.display = "none"
    document.getElementById('o-nas').style.display = "none"
    document.getElementById('kontakt').style.display = "none"
}

function kontakt(){
    document.getElementById('kontakt').style.display = "flow-root"
    document.getElementById('home').style.display = "none"
    document.getElementById('o-nas').style.display = "none"
    document.getElementById('serwis').style.display = "none"
}
 
function select(){
    let element = (document.getElementById('selected').value)
    if(element == 'f'){
        document.getElementById('firma').style.display = "flow-root"
        document.getElementById('home').style.display = "none"
        document.getElementById('firma-i-instytucje').style.display = "none"
    }else if(element == 'dfi'){
        document.getElementById('firma-i-instytucje').style.display = "flow-root"
        document.getElementById('home').style.display = "none"
        document.getElementById('firma').style.display = "none"
    }else{
        document.getElementById('home').style.display = "flow-root"
        document.getElementById('firma').style.display = "none"
        document.getElementById('firma-i-instytucje').style.display = "none"
    }
}