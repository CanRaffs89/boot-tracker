<?php

include ('config.php');

$name = $type = '';
$distance = 0.0;

$nameError = '';
$typeError = '';

if(isset($_POST['submit'])) {
    if(empty($_POST['shoe-name'])) {
        $nameError = 'Please enter a name';
    } else {
        $name = filter_input(INPUT_POST, 'shoe-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if(empty($_POST['shoe-type'])) {
        $typeError = 'Please select a shoe type';
    } else {
        $type = filter_input(INPUT_POST, 'shoe-type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if(empty($nameError) && empty($typeError)) {
        $stmt = $pdo->prepare('INSERT INTO shoes(name, type, distance) VALUES(?, ?, ?)');
        $stmt->execute([$name, $type, $distance]);
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    
<?php include ('templates/header.php');?>

<h2>Add a New Shoe</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="shoe-name">Enter a shoe name...</label>

    <?php if(!empty($nameError)) {
    echo "<p style='color:orangered;'>$nameError</p>";
    } ?>

    <input id="shoe-name-input" type="text" name="shoe-name" placeholder="Enter a name...">
    <label for="shoe-type">Choose a shoe type...</label>

    <?php if(!empty($typeError)) {
    echo "<p style='color:orangered;'>$typeError</p>";
    } ?>

    <select name="shoe-type" id="shoe-type-input">
        <option value="" disabled selected>Choose a type...</option>
        <option value="Hiking">Hiking</option>
        <option value="Running">Running</option>
        <option value="Casual">Casual</option>
    </select>
    <input id="shoe-form-submit" name="submit" type="submit" value="Submit">
</form>

<?php include ('templates/footer.php');?>

</html>