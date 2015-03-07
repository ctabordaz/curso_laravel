<?php

class PersonalController extends BaseController{
    public function getRegistrar($tipo) {
        if ($tipo == "medico"){
            return View::make('registro.medico');
        }elseif ($tipo=="enfermera") {
            return View::make('registro.enfermera');
        }elseif ($tipo == "paciente"){
            return View::make('registro.paciente');
        }else{
            echo "error";
        }
        
        
    }
public function getEditar(){
    echo "editando...";
}
    
}

