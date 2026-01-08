<?php
require 'models/BukuModel.php';

class BukuController {
    private $model;

    public function __construct() {
        if (!isset($_SESSION['user'])) {
            header("Location: /uas_sem_3/login");
            exit;
        }
        $this->model = new BukuModel();
    }

    public function index() {
        $search = $_GET['search'] ?? '';
        $page   = $_GET['page'] ?? 1;

        $limit  = 5;
        $offset = ($page - 1) * $limit;

        $data  = $this->model->all($search, $limit, $offset);
        $total = $this->model->count($search);

        require 'views/buku/index.php';
    }

    public function create() {
        if ($_SESSION['user']['role'] !== 'admin') die('Forbidden');
        require 'views/buku/create.php';
    }

    public function store() {
        $this->model->insert($_POST);
        header("Location: /uas_sem_3/buku");
    }

    public function edit($id) {
        $data = $this->model->find($id);
        require 'views/buku/edit.php';
    }

    public function update($id) {
        $this->model->update($id, $_POST);
        header("Location: /uas_sem_3/buku");
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: /uas_sem_3/buku");
    }
}
