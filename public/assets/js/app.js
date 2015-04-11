//JSON JAVA SCRIPT OBJECT NOTATION
var can = 1;
var managerScreen = managerScreen || {};
managerScreen ={
    cambiar_color: function(color){
        $("body").css('background-color',color);
    },
    saludar: function(){
        alert("hola mundo");
    },
    ocultar: function(){
        
        var x = document.getElementsByTagName("P");
        var i;
        for (i = 0; i < x.length; i++) {
         if(x[i].style.display ==="none"){
            x[i].style.display = 'block';
           }else{
              x[i].style.display ="none" ;
             }
        }
       
    },
    ocultarj: function(){
        $("p").toggle();
    },
    desvanecer: function(){
        $("p").fadeToggle(1000)();
    },
    alertify: function(){
       alertify.success("Success notification");
       alertify.error("Error notification");
       alertify.custom = alertify.extend("custom");
// use it
alertify.custom("hola");
       
    },
    insert: function(){
     $("<div>",{class: 'box', id: 'trolo'}).append($("<h2>", {id: can,text: can})).appendTo("#con");
      can = can+1;  
    }
};

var ms = managerScreen;



var persona={
    nombre: "camilo",
    apellido : "taborda",
    lugar : "medellin"
    
    
};




function edad(){
edad = prompt("ingrese edad :");
while(edad < 18){
    alert("Usted es menor de edad");
    edad = prompt("ingrese edad :");
    
}

alert("usted es mayor de edad");
}
//edad();
/*
        jQuery(document).ready(function () {
            var options = {
                onLoad: function () {
                    $('#messages').text('Start typing password');
                },
                onKeyUp: function (evt) {
                    $(evt.target).pwstrength("outputErrorList");
                }
            };
            $(':password').pwstrength(options);
        });*/
        
        
        

