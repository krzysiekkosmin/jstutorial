
function tabliceWFor(){
    const tab = [1, 2, 3, 4, 5]

    var temp1 = "";
    for(let i = 0; i < tab.length; i++){
        tab[i] *=2//wyświetla parzyste
        //console.log(tab[i])
        temp1 += tab[i]+" | ";
        document.getElementById('tab01').innerHTML = temp1;
    }


    var temp2 = "";
    for(let i in tab){
        tab[i] *=2//wyświetla parzyste
        //console.log(tab[i])
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

    //console.log(tab)
    document.getElementById('tab04').innerHTML = tab+"<br><b>unshift</b>, funkcja dodająca element na początku tablicy: " 
                                                    +"<br> oraz funkcja <b>push</b>, dodająca element na końcu tablicy";

    tab.shift()
    tab.pop()

    document.getElementById('tab05').innerHTML = tab+"<br><b>shift</b>, funkcja usuwająca element na początku tablicy: " 
                                                    +"<br> oraz funkcja <b>pop</b>, usuwająca element na końcu tablicy";

}

tabliceUnshiftPush();

function metodyNaTablicach(){
    const samochody = [
        {
            marka: 'Opel',
            model: 'Astra',
            przebieg: 120000,
            cena: 10000,
            ilosc: 3
        },
        {
            marka: 'Mazda',
            model: '5',
            przebieg: 140000,
            cena: 12000,
            ilosc: 4
        },
        {
            marka: 'Renault',
            model: 'Clio',
            przebieg: 230000,
            cena: 12000,
            ilosc: 4
        }
    ];
    var temp = "";
    //console.log(samochody)
    samochody.forEach(function(e){
        
        if(e.przebieg > 130000) //return console.log(e.marka)
                return document.getElementById('tab06').innerHTML = (e.marka)

    })
    //document.getElementById('tab06').innerHTML = samochody;
}
metodyNaTablicach();

function tablicaModyfikacjaCeny(){
    const samochody = [
        {
            marka: 'Opel',
            model: 'Astra',
            przebieg: 120000,
            cena: 10000,
            ilosc: 3
        },
        {
            marka: 'Mazda',
            model: '5',
            przebieg: 140000,
            cena: 12000,
            ilosc: 4
        },
        {
            marka: 'Renault',
            model: 'Clio',
            przebieg: 230000,
            cena: 12000,
            ilosc: 4
        }
    
    ];

    let temp = ""
    for(let i in samochody){
        temp += samochody[i]+" | ";
        document.getElementById("tab08").innerHTML = temp;
    }
    const modyfikacjaCeny = samochody.map(function(e){
        return e.cena*1.2
    });

    console.log(samochody)
    console.log(modyfikacjaCeny)

    //document.getElementById('tab07').innerHTML = modyfikacjaCeny
}

tablicaModyfikacjaCeny()

function test(){
    const person = [
    {
        name: "John",
        age: 30,
        city: "New York"
    },
    {
        name: "Janek",
        age: 23,
        city: "Warsaw"
    }
    ];

    // Build a Text
    let text = "";
    for (let x = 0; x < person.length; x++) {
        document.getElementById('tab07').innerHTML = (`Imię: ${person[x].name}, Wiek: ${person[x].age}`);

};

}
test();
