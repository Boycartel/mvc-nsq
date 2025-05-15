<?php
require_once __DIR__ . '/../config/database.php';

class Student {
    public static function all() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM students ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($name, $matric) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO students (name, matric_no) VALUES (?, ?)");
        return $stmt->execute([$name, $matric]);
    }

    public static function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public static function update($id, $name, $matric) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE students SET name = ?, matric_no = ? WHERE id = ?");
        return $stmt->execute([$name, $matric, $id]);
    }

    public static function find($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
