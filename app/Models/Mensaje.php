<?php
// app/Models/Mensaje.php
class Mensaje {
    public static function all(): array {
        $pdo = Database::getConnection();
        $st = $pdo->query("SELECT * FROM mensajes ORDER BY id DESC");
        return $st->fetchAll();
    }
    public static function find(int $id): ?array {
        $pdo = Database::getConnection();
        $st = $pdo->prepare("SELECT * FROM mensajes WHERE id = ?");
        $st->execute([$id]);
        $r = $st->fetch(); return $r ?: null;
    }
    public static function create(array $d): int {
        $pdo = Database::getConnection();
        $st = $pdo->prepare("INSERT INTO mensajes (titulo, descripcion, imagen, fecha) VALUES (?, ?, ?, ?)");
        $st->execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha']]);
        return (int)$pdo->lastInsertId();
    }
    public static function updateById(int $id, array $d): bool {
        $pdo = Database::getConnection();
        $st = $pdo->prepare("UPDATE mensajes SET titulo=?, descripcion=?, imagen=?, fecha=? WHERE id=?");
        return $st->execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha'], $id]);
    }
    public static function deleteById(int $id): bool {
        $pdo = Database::getConnection();
        $st = $pdo->prepare("DELETE FROM mensajes WHERE id=?");
        return $st->execute([$id]);
    }
}
