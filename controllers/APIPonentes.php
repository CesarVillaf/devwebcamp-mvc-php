<?php

namespace Controllers;

use Model\Ponente;

class APIPonentes {

    public static function index() {
        if(!is_admin()) {
            header('Location: /login');
        }
        
        $ponentes = Ponente::all();
        echo json_encode($ponentes);
    }

    public static function ponente() {
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id or $id < 1) {
            echo json_encode([]);
            return;
        }

        $ponente = Ponente::find($id);

        echo json_encode($ponente, JSON_UNESCAPED_SLASHES);
    }
}