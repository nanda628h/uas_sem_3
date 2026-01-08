<?php
session_start();
require_once 'config/database.php';

$url = $_GET['url'] ?? 'login';
$url = explode('/', $url);

switch ($url[0]) {
    case 'login':
        require 'controllers/AuthController.php';
        (new AuthController)->login();
        break;

    case 'logout':
        require 'controllers/AuthController.php';
        (new AuthController)->logout();
        break;

    case 'buku':
        require 'controllers/BukuController.php';
        $buku = new BukuController();
        $aksi = $url[1] ?? 'index';

        if ($aksi == 'create') $buku->create();
        elseif ($aksi == 'store') $buku->store();
        elseif ($aksi == 'edit') $buku->edit($url[2]);
        elseif ($aksi == 'update') $buku->update($url[2]);
        elseif ($aksi == 'delete') $buku->delete($url[2]);
        else $buku->index();
        break;

    default:
        header("Location: login");
}
