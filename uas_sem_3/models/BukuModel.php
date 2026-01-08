<?php
class BukuModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function all($search, $limit, $offset) {
        $stmt = $this->db->prepare(
            "SELECT * FROM buku
             WHERE judul LIKE :search
             ORDER BY id DESC
             LIMIT :limit OFFSET :offset"
        );

        $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function count($search) {
        $stmt = $this->db->prepare(
            "SELECT COUNT(*) FROM buku WHERE judul LIKE :search"
        );
        $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function insert($data) {
        $stmt = $this->db->prepare(
            "INSERT INTO buku (judul, penulis, penerbit, tahun)
             VALUES (?, ?, ?, ?)"
        );
        $stmt->execute($data);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM buku WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare(
            "UPDATE buku
             SET judul=?, penulis=?, penerbit=?, tahun=?
             WHERE id=?"
        );
        $stmt->execute([...$data, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM buku WHERE id = ?");
        $stmt->execute([$id]);
    }
}
