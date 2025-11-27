<?php include 'header.php'; ?>

<?php
$day = 'Monday';

switch ($day) {
    case 'Monday':
        $doctor = 'Dra. Fiona Marie Ting';
        break;
    case 'Tuesday':
        $doctor = 'Dr. Dustine Carl Samaniego';
        break;
    case 'Wednesday':
        $doctor = 'Dra. Winnie Eliah Cordero';
        break;
    case 'Thursday':
        $doctor = 'Dr. Tommy James Uy';
        break;
    case 'Friday':
        $doctor = 'Dra. Tali Sotto';
        break;
    case 'Weekends':
        $doctor = 'Dra. Ina Contis';
        break;
    default:
        $doctor = 'Dra. Fhiona Maria Elyse Ledezma';
}
?>

<?php
$session = 5;
$hour = 500;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sevra</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to Sevra!</h1>
    <p>Welcome to your gentle space for journaling, reflection, and self-care — a cozy, comforting corner where you’re always safe to be yourself. Here, you can take a deep breath, slow down, and find peace in your own rhythm. Whether you’re writing your thoughts, exploring your feelings, or simply pausing to care for yourself, this is your quiet sanctuary to feel supported, understood, and refreshed.</p>
    
    <button>Start journaling</button><br>

    <img src = "flower.png" alt = "flower">

    <p>Daily Prompt</p>
    <button>Make a Note</button><br>

    <h3>Are you lookng for a psychiatrist?</h3>
    <h2>Available Doctor every <?= $day; ?></h2>
    <h2><?= $doctor ?></h2>

    <p>
        <?php
        do {
            echo $session;
            echo ' session per hour cost $';
            echo $session * $hour;
            echo '<br>';
            $session--;
        } while ($session > 0);
        ?>
    </p>

    <img src = "quote.png" alt = "sometimes, it's better to just let it out.">

</body>
</html>

<?php include 'footer.php'; ?>