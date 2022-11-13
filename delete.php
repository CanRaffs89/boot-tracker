<?php include ('config/database.php');?>

<?php 

if(isset($_GET['id'])) {
    $stmt = $pdo->prepare('DELETE FROM shoes WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    header('Location: index.php');
}

?>