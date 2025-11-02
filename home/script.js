$.getJSON('../', data => {
        //console.log(data); 
        var temp = "";
        for(let a = 0; a < data.length; a++){
            console.log(data[a])
            temp += "<a class='alink' href=../"+data[a]+"> "+data[a]+" </a><br>";
            document.getElementById('p').innerHTML = temp;

        }
    });