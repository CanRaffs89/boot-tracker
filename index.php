<?php include ('config/database.php');?>

<!DOCTYPE html>
<html lang="en">

    <?php include ('templates/header.php');?>

        <?php foreach($shoes as $shoe) { ?>
            <div class="card">
            <img class="shoe-icon" src="img/shoe-prints-solid.svg" alt="">
            <h3><?php echo htmlspecialchars($shoe->name); ?></h3>
            <div class="distance-display">
                <h1 class="distance-number"><?php echo htmlspecialchars($shoe->distance); ?></h1>
                <h4 class="distance-unit">miles</h4>
            </div>
            <div class="card-controls">
                <a href=""><img id="edit-icon" class="card-icon" src="img/pen-solid.svg" alt=""></a>
                <a href=""><img id="delete-icon" class="card-icon" src="img/trash-can-solid.svg" alt=""></a>
            </div>
        </div>
        <?php } ?>

    <?php include ('templates/footer.php');?>

</html>