<?php

namespace Model;

class Categoria extends ActiveRecord {

    protected static $tabla = 'categorias';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;

    // No hace falta un constructor en este caso. No tiene entrada de datos, solo utiliza los métodos heredados.
}