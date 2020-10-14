document.querySelector('#resultado').innerHTML = 'Ejemplos de url: https://www.dicelacancion.com/letra-solita-sech';

document.querySelector('#btnExtraerDatos').onclick = function() {

    let url = document.querySelector('#txtUrl').value;
    //se borra
    fetch("index.php?r=post",
        {
            method: "POST",
            body: (new URLSearchParams("url="+url))
        })
        .then(res=>res.json())
        .then(data=>ubicarEnVista(JSON.stringify(data)));
}

function ubicarEnVista(data){
    document.querySelector('#resultado').innerHTML = data;
}