

<html>
    <head>
        <script src="./assets/js/app.js"></script>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="./libs/alertify/lib/alertify.min.js"></script>
        <link rel="stylesheet" href="./libs/alertify/themes/alertify.default.css"/>
        <link rel="stylesheet" href="./libs/alertify/themes/alertify.core.css"/>
        <script type="text/javascript" src="./libs/jquery.complexify.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function ()
            { $("#txtPassword").complexify({}, function (valid, complexity) {
                    document.getElementById("PassValue").value = complexity; 
               }); }); 
        </script>


       
        <title>ejemplo</title>
    </head>
    <body>
        Bienvenido
        <div id="con">
            <div class="uno">
               <button onclick="ms.saludar()">Saludar</button>
              <button onclick="ms.desvanecer()">Desvanecer</button>
              <button onclick="ms.alertify()">Alerta</button>
             <button onclick="ms.cambiar_color('red')">Rojo</button>
              <button onclick="ms.cambiar_color('green')">Verde</button>
              <button onclick="ms.ocultar()">Ocultar</button>
              <button onclick="ms.ocultarj()">Ocultar_jquery</button>
              <button onclick="ms.insert()">Añadir</button>
              <p >Esto es un parrafo</p>
              <p> parrafo 2</p>
              <p>parrafo 3</p>
              <p> <span>Password:</span><input type="password" id="txtPassword" /> 
                  <meter value="0" high="80" optimum="90" low="20" id="PassValue" max="100"></meter> 
              </p>
            </div>

        </div>
         
           


        


    </body>
</html>
