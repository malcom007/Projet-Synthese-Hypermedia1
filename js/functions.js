function loader(){
    window.onload = function(){
        alert("Helo");
        /*activeMenu();*/







    }
}


function activeMenu() {

//On recuper le parent de notre div
    var header = document.getElementById("menu");
    //On recupere une liste d'element ayant la btn se trouvant ds le parent header
    var btns = header.getElementsByClassName("btn");

    //on ajouter un écouteur de type click sur chaque btn en utilisant la boucle for et ainsi que son indice
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            //on recupere l'element ayant ayant la classe Active
            var current = document.getElementsByClassName("active");
            console()
            // on remplace cette classe en enlevant active
            current[0].className = current[0].className.replace("active", " ");
            //et l'objet courrant sur lequel on a cliqué, on ajoute active
            this.className += " active";
        });
    }

}

function juno() {

    /*
    x=document.getElementById("sng_Home_2_Menu_1");
    y=x.getElementsByTagName("li");
    idCible="";

    //On parcours fes tableau de li
    for (i=0; i<y.length-1; i++){
        y[i].addEventListener("click", function () {

            // Si
            if (y[i].className = "slick-active"){
                toRemove = y[i];
                toRemove.className = "";

            }else {
                idCible = this.id;
                console.log("Houlala Malcom "+idCible);
            }

        })

    }
    //document.getElementById(idCible).className="slick-active";


*/
};

/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function mobileSwitch() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}








