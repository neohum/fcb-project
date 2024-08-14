<?php
declare(strict_types = 1);

$data['select_url']    = explode('/',$_SERVER["REQUEST_URI"]);


$data['service_id'] = $data['select_url'][3];
$data['grade']      = $data['select_url'][4];
$data['class']      = $data['select_url'][5];
$data['memory']     = $data['select_url'][6];
$data['ipv41']       = $data['select_url'][7];
$data['ipv42']       = $data['select_url'][8];
$data['ipv43']      = $data['select_url'][9];
$data['ipv44']       = $data['select_url'][10];
$data['com_name']   = $data['select_url'][11];
$data['year']       = $data['select_url'][12];

$data['ipv4'] = $data['ipv41'].'.'.$data['ipv42'].'.'.$data['ipv43'].'.'.$data['ipv44'];


$cms->getCheck()->updateCheck($data['grade'], $data['class'], $data['memory'], $data['ipv4'], $data['com_name'], $data['year'], $data['service_id']);


redirect('check/'.$data['service_id']);