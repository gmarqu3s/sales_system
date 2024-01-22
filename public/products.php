<?php

include_once('connection_db.php');
include_once('helper.php');


$name = filter_input(INPUT_GET, 'name', FILTER_DEFAULT);
$ref = filter_input(INPUT_GET, 'ref', FILTER_VALIDATE_INT);

if(!empty($ref)){
    $query = 'select
        p.id as "id",
        p.nome as "name",
        p.preco as "price",
        f.nome as "provider"
    from
        produto_fornecedor pf
    left join produto p on
        pf.id_produto = p.id
    left join fornecedor f on
        pf.id_fornecedor = f.id
    where p.id = ' . $ref;

    $res = $conn->query($query);

    if ($res->num_rows){
        $data = $res->fetch_all(MYSQLI_ASSOC);
        $data = formate_return($data);
    }
    else
        $data = [];

    echo json_encode($data);
}

elseif(!empty($name)){
    $query = "select
        p.id as id,
        p.nome as name,
        p.preco as price,
        f.nome as provider
    from
        produto_fornecedor pf
    left join produto p on
        pf.id_produto = p.id
    left join fornecedor f on
        pf.id_fornecedor = f.id
    where p.nome like '%" . $name . "%'";

    $res = $conn->query($query);

    if ($res->num_rows){
        $data = $res->fetch_all(MYSQLI_ASSOC);

        $data = formate_return($data);
    }
    else
        $data = [];

    echo json_encode($data);
}
else{
    echo json_encode([]);
}