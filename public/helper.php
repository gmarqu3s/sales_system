<?php

function formate_return($data){
    $ids = [];

    foreach ($data as $row) {
        $id = $row['id'];
        $name = $row['name'];
        $provider = $row['provider'];
        $price = $row['price'];

        // Se o ID ainda não estiver presente em $ids
        if (!isset($ids[$id])) {
            $ids[$id] = ['id' => $id, 'name' => $name, 'price' => $price, 'providers' => [$provider]];
        } else {
            // Se o ID já estiver presente em $ids, apenas adicione o novo provider
            $ids[$id]['providers'][] = $provider;
        }
    }

    $data = array_values($ids);
    return $data;
}