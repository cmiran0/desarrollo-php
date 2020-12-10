<?php

require __DIR__ . " /../Model/productos.php";
/*
class ProductosController
{
    
    public function index()
    {
        
        echo json_encode(['foo'=>'barr']);
        
        //retorna una coleccion de objetos
    }
    public function show($id)
    {
        //retorna el elemento con identificador $id
    }
    public function store($request)
    {
        //se crea un nuevo item 
    }
    public function update($id, $request)
    {
        // se actualiza el elemento con identificador $id
    }
    public function destroy($id)
    {
        //elinina el elemento
    }


}

*/

if ($verbo == 'GET') {
    $data = getProductos();
    $response = json_encode($data);
    return;
}

if ($verbo == 'POST') {
    $data = json_decode(file_get_contents('php://input'));
    postProductos($data);
    $response = json_encode($data);
    return;
}



