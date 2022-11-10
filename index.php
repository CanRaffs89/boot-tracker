<?php

$shoes = [
    [
        'id' => 1,
        'name' => 'Hiking boots',
        'distance' => 3.2
    ],
    [
        'id' => 2,
        'name' => 'Running shoes',
        'distance' => 2.5
    ],
    [
        'id' => 3,
        'name' => 'Casual sneakers',
        'distance' => 12
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Boot Tracker</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Boot Tracker</h2>
            <a href=""><img id="add-icon" src="img/circle-plus-solid.svg" alt=""></a>
        </div>

        <?php foreach($shoes as $shoe) { ?>
            <div class="card">
            <img class="shoe-icon" src="img/shoe-prints-solid.svg" alt="">
            <h3><?php echo htmlspecialchars($shoe['name']); ?></h3>
            <div class="distance-display">
                <h1 class="distance-number"><?php echo htmlspecialchars($shoe['distance']); ?></h1>
                <h4 class="distance-unit">miles</h4>
            </div>
            <div class="card-controls">
                <a href=""><img id="edit-icon" class="card-icon" src="img/pen-solid.svg" alt=""></a>
                <a href=""><img id="delete-icon" class="card-icon" src="img/trash-can-solid.svg" alt=""></a>
            </div>
        </div>
        <?php } ?>

    </div>
</body>
</html>