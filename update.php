<?php include ('config/database.php');?>

<?php 

if(isset($_GET['id'])) {
    if(!empty($_POST)) {
        $miles = isset($_POST['distance-input']) ? $_POST['distance-input'] : NULL;
        $stmt = $pdo->prepare('UPDATE shoes SET distance = ? WHERE id = ?');
        $stmt->execute([$miles, $_GET['id']]);
        $success = 'Miles updated!';
    }
    $stmt = $pdo->prepare('SELECT * FROM shoes WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $shoe = $stmt->fetchAll();
}

?>

<!DOCTYPE html>
<html lang="en">

    <?php include ('templates/header.php');?>

    <h2>Add Miles</h2>
        <div class="card card-update">
            <h2><?php echo htmlspecialchars($shoe[0]->name); ?></h2>
            <div class="distance-display distance-display-update">
                <form action="update.php?id=<?php echo htmlspecialchars($shoe[0]->id); ?>" method="post">
                    <label id="distance-input-label" for="distance-input">Add your miles...</label>
                    <input type="number" step="0.1" id="distance-input" name="distance-input" value="<?php echo htmlspecialchars($shoe[0]->distance); ?>">
                    <input id="miles-form-submit" name="submit" type="image" src="img/circle-check-solid.svg" value="Submit">
                </form>
                <?php if(!empty($success)): ?>
                    <p id="update-success-msg"><?php echo $success; ?></p>
                <?php endif; ?>
            </div>
        </div>

    <?php include ('templates/footer.php');?>

</html>