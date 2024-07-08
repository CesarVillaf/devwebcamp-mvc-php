<?php

namespace Model;

class Dia extends ActiveRecord {

    protected static $tabla = 'dias';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;

    // No hace falta un constructor en este caso. No tiene entrada de datos, solo utiliza los métodos heredados.
}