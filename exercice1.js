function envoyer(){
    var m1= document.getElementById("motdepasse").value;
    var m2= document.getElementById("C_motdepasse").value;
    if(m1!=m2 || m1=="" || m2==""){
        event.preventDefault();
    }
}

