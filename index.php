<?php include ('config/database.php');?>

<?php
$stmt = $pdo->prepare('SELECT * FROM shoes');
$stmt->execute();
$shoes = $stmt->fetchAll(); 
?>

<!DOCTYPE html>
<html lang="en">

    <?php include ('templates/header.php');?>

        <?php foreach($shoes as $shoe) { ?>
            <div class="card">
                <?php if($shoe->type == 'Hiking') { ?>
                    <img class="shoe-icon" src="img/hiking-icon.svg" alt="">
                <?php } elseif($shoe->type == "Running") { ?>
                    <img class="shoe-icon" src="img/running-icon.svg" alt="">
                <?php } else { ?>
                    <img class="shoe-icon" src="img/casual-icon.svg" alt="">
                <?php } ?>
                <h3><?php echo htmlspecialchars($shoe->name); ?></h3>
                <div class="distance-display">
                    <h1 class="distance-number"><?php echo htmlspecialchars($shoe->distance); ?></h1>
                    <h4 class="distance-unit">miles</h4>
                </div>
                <div class="card-buttons">
                    <a href="update.php?id=<?php echo htmlspecialchars($shoe->id); ?>"><img id="edit-icon" class="card-icon" src="img/circle-plus-solid.svg" alt=""></a>
                    <a href="delete.php?id=<?php echo htmlspecialchars($shoe->id); ?>"><img id="delete-icon" class="card-icon" src="img/trash-can-solid.svg" alt=""></a>
                </div>
            </div>
        <?php } ?>

    <?php include ('templates/footer.php');?>

</html>