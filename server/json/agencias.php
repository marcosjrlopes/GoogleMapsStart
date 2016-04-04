<?php

include_once '../Dao.php';

//$codEmpresa = $_POST['cod_empresa'];

//$results = getUnidades($codEmpresa);
$results = getUnidades();

foreach ($results as $result) {

    $resulArray[] = array(
    'Codigo' => $result->Codigo,
    'Nome' => utf8_encode($result->Nome),
    'Endereco' => utf8_encode($result->Endereco),
    'Bairro' => utf8_encode($result->Bairro),
    'Cidade' => utf8_encode($result->Cidade),
    'Estado' => utf8_encode($result->Estado),
    'Pais' => utf8_encode('Brasil'), 
    'Lat' => $result->Latitude,
    'Long' => $result->Longitude
    );
}

header("Content-type: application/json");
$print_result = json_encode($resulArray);
echo utf8_decode($print_result);