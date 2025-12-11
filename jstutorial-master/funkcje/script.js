//let nr;
let wybor;
const pracownicy = new Array()

//konstruktor
function Osoba(imie,nazwisko,numer){
    this.imie = imie
    this.nazwisko = nazwisko
    this.numer = parseInt(numer)//zmiana na rodzaj numeryczny
}

//funkcja do tworzenia osoby
// function tworzenie(imie,nazwisko){
//     osoba = new Osoba(imie,nazwisko)
//         pracownicy.push(osoba)//do pracownicy użyjemy metodę push i przekazujemy osobę
// }

// function usuwanie(nr){
//     delete pracownicy[nr]
// }

const metody = {
    tworzeniePracownika: function(imie,nazwisko,numer){
        console.log(this)
        let osoba = new Osoba(imie,nazwisko,numer)
        pracownicy.push(osoba)
    },
    wyswietlPracoenika: function(){
        document.writeln('Imię: ', this.imie,' nazwisko: ', this.nazwisko)
    },
    usuwaniePraconika: function(){
        delete pracownicy[this.numer-1]
    }
}

while(wybor != 0){
    wybor = prompt('Podaj co chcesz zrobić. (1 - tworzenie, 2 - usuwanie, 3 - wyświetlanie, 4 - numer pracownika, 0 - wyjście)')
    switch(wybor){
    case '1':
        let imie = prompt('podaj imię')
        let nazwisko = prompt('podaj nazwisko')
        let numer = prompt('Podaj numer pracownika')
        let tworzenie = metody.tworzeniePracownika.bind(pracownicy)
        tworzenie(imie,nazwisko,numer)
        break;
    case '2':
        let nrP = prompt('Podaj numer indeksu pracownika do usunięcia')
        metody.usuwaniePraconika.apply(pracownicy[nr])
        wybor=0
        break;
    case '3':
        pracownicy.forEach((e)=>{
            console.log(e)
        })
        break;
    case '4':
        let nr = prompt('Podaj numer indeksu pracownika')
        metody.wyswietlPracoenika.call(pracownicy[nr])
        wybor=0
        break;
    default:
        document.writeln('Nie wybrano odpowiedniej opcji!')
    }
}

console.log(pracownicy)