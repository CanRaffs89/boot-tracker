<?php include ('config.php');?>

<?php 

if(isset($_GET['id'])) {
    $stmt = $pdo->prepare('DELETE FROM shoes WHERE id = ?');
    $stmt->execute([$_GET['id']]);
}

?>