<?php

function getProductos()
{
    return json_decode(file_get_contents(__DIR__ . "/../Bd/productos.json"));
}

function postProductos($producto)
{
    $array = getProductos();
    array_push($array, $producto);
    $productos = json_encode($array);
    file_put_contents(__DIR__ . "/../Bd/productos.json", $productos);
}

