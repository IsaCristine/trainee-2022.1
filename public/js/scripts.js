function openDesc(){

    var x = document.getElementById("description");

    if(x.className === "description"){
        x.className += " textjs";
        document.getElementById("mais").innerHTML = "-";
    }

    else{
        x.className = "description";
        document.getElementById("mais").innerHTML = "+";
    }

}