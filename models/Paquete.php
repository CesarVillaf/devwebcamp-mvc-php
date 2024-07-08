<?php

namespace Model;

class Paquete extends ActiveRecord {
    
    protected static $tabla = 'paquetes';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;

    // No hace falta un constructor en este caso. No tiene entrada de datos, solo utiliza los métodos heredados.
}