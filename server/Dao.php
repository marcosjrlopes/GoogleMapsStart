<?php

function getEmpresa($codEmpresa)
{  
    include_once 'config.php';   
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    
    $query = "SELECT * FROM empresas WHERE codfilial = ?";
    $result = $conexao->prepare($query);
    $result->bindParam(1,$codEmpresa);
    
    if($result->execute())
    {
        if($result->rowCount() > 0)
        {
            $row = $result->fetch(PDO::FETCH_OBJ);
            return $row;
        }
        else 
        {
            return NULL;
        }
    }
    else 
    {
        return NULL;
    }
}

function getUnidades()
{  
    include_once 'config.php';   
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    
    $query = "SELECT * FROM agencias";
    $result = $conexao->prepare($query);

    if($result->execute())
    {
        if($result->rowCount() > 0)
        {
            while($row = $result->fetch(PDO::FETCH_OBJ))
            {
                $rows[] = $row; 
            }
            return $rows;
        }
        else 
        {
            return NULL;
        }
    }
    else 
    {
        return NULL;
    }
}

function getEmpresas()
{
    include_once 'config.php';   
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    
    $query = "SELECT * FROM empresas";
    $result = $conexao->prepare($query);

    if($result->execute())
    {
        if($result->rowCount() > 0)
        {
            while($row = $result->fetch(PDO::FETCH_OBJ))
            {
                $rows[] = $row;
            }
            return $rows;
        }
        else
        {
            return NULL;
        }
    }
    else
    {
        return NULL;
    }
}
