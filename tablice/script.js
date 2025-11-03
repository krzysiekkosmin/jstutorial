
function tabliceWFor(){
    const tab = [1, 2, 3, 4, 5]

    var temp1 = "";
    for(let i = 0; i < tab.length; i++){
        tab[i] *=2//wyświetla parzyste
        console.log(tab[i])
        temp1 += tab[i]+" | ";
        document.getElementById('tab01').innerHTML = temp1;
    }


    var temp2 = "";
    for(let i in tab){
        tab[i] *=2//wyświetla parzyste
        console.log(tab[i])
        temp2 += tab[i]+", ";
        document.getElementById('tab02').innerHTML = temp2;
    }
}

tabliceWFor();



function tabliceUnshiftPush(){
    const tab = [1,2,3]
    document.getElementById('tab03').innerHTML = tab+"<br>listownie tablicy"

    tab.unshift(8)
    tab.push(4)

    console.log(tab)
    document.getElementById('tab04').innerHTML = tab+"<br><b>unshift</b>, funkcja dodająca element na początku tablicy: " 
                                                    +"<br> oraz funkcja <b>push</b>, dodająca element na końcu tablicy";

    tab.shift()
    tab.pop()

    document.getElementById('tab05').innerHTML = tab+"<br><b>shift</b>, funkcja usuwająca element na początku tablicy: " 
                                                    +"<br> oraz funkcja <b>pop</b>, usuwająca element na końcu tablicy";

}

tabliceUnshiftPush();



