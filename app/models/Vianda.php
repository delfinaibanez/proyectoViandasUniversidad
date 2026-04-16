<?php
// app/models/Vianda.php - Vianda Model

require_once __DIR__ . '/../../config/db.php';

class Vianda {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM viandas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM viandas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO viandas (nombre, descripcion, precio, imagen) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['nombre'], $data['descripcion'], $data['precio'], $data['imagen']]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE viandas SET nombre = ?, descripcion = ?, precio = ?, imagen = ? WHERE id = ?");
        return $stmt->execute([$data['nombre'], $data['descripcion'], $data['precio'], $data['imagen'], $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM viandas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>