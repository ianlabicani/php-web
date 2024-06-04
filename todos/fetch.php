<?php

function fetchTodos($conn) {
    $stmt = $conn->query("SELECT * FROM todos");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}