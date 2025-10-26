<?php
function getCategories($conn) {
    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getContentsBySection($conn, $section = 'recent') {
    switch($section) {
        case 'recent':
            $sql = "SELECT c.*, cat.name as category_name FROM contents c 
                    LEFT JOIN categories cat ON c.category_id = cat.id
                    ORDER BY c.release_date DESC LIMIT 8";
            break;
        case 'recommended':
            $sql = "SELECT c.*, cat.name as category_name FROM contents c 
                    LEFT JOIN categories cat ON c.category_id = cat.id
                    ORDER BY RAND() LIMIT 8";
            break;
        case 'favorites':
            if(!isset($_SESSION['user_id'])) return [];
            $user_id = $_SESSION['user_id'];
            $sql = "SELECT c.*, cat.name as category_name FROM contents c
                    JOIN favorites f ON c.id=f.content_id
                    LEFT JOIN categories cat ON c.category_id = cat.id
                    WHERE f.user_id=$user_id";
            break;
        default:
            $sql = "SELECT c.*, cat.name as category_name FROM contents c 
                    LEFT JOIN categories cat ON c.category_id = cat.id";
    }
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}
?>
