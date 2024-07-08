<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}
function pagina_actual($path): bool {
    return str_contains($_SERVER['PATH_INFO'] ?? '/', $path)? true: false;
}
function is_session(): void {
    if(!isset($_SESSION)) {
        session_start();
    }
}
function is_auth(): bool {
    is_session();
    return isset($_SESSION['nombre']) and !empty($_SESSION);
}
function is_admin(): bool {
    is_session();
    return isset($_SESSION['admin']) and !empty($_SESSION['admin']);
}
function aos_animacion(): void {
    $efectos = ['fade-up', 'fade-down', 'fade-left', 'falde-right', 'flip-left', 'flip-right', 'zoom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-out'];

    $efecto = array_rand($efectos, 1);
    echo ' data-aos="' . $efectos[$efecto] . '" ';
}