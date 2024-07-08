<?php

namespace Model;

class Hora extends ActiveRecord {
    
    protected static $tabla = 'horas';
    protected static $columnasDB = ['id', 'hora'];

    public $id;
    public $hora;

    // No hace falta un constructor en este caso. No tiene entrada de datos, solo utiliza los métodos heredados.
}