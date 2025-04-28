<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOVE EXPERT AMEN</title>
    <link rel="stylesheet" href="php1.css">
    
</head>
<body>
    <h1>How in love are you today? 😘💖</h1>
    <form action="php1.php" method="POST">
        <label>Type in your mood (1-10): </label>
        <input type="text" name="moodLevel"><br><br>
        <label>Do you want a rizz tip? 😏 </label>
        <input type="radio" name="extra" value="yes"> Yes please, master
        <input type="radio" name="extra" value="no" checked> No, get off me rizzler<br><br>
        <input type="submit" value="Submit">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $moodLevel = $_POST['moodLevel'];
    $extra = ($_POST['extra'] === 'yes') ? true : false;
    echo "<h2>Your Love Level Is: {$moodLevel} 😊💘</h2>";
    echo "<h3>🤡 Let's Rank your Simpness from (1 to {$moodLevel}) 🤡</h3>";
    for ($x = 1; $x <= $moodLevel && $x <= 10; $x++) {
    echo "Level {$x}: 💀<br><br>";
}

if ($moodLevel >= 8) {
    echo "MY GOD! You're an even bigger simp than I thought... No way to save you now 😭 Goodbye, fellow soldier 😿!<br>";
} elseif ($moodLevel >= 5) {
    echo "Starting to like someone? BEWARE FAM! 😨 TAKE IT BY ITS PACE 😔<br>";
} elseif ($moodLevel >= 1) {
    echo "You chose yourself over love... 😇🤍 Have you ever considered loving? 🥰<br>";
} else {
    echo "DON'T BE A KILLJOY. TYPE IN ONLY (1-10)<br>";
}

    echo "<h3>Your Hearts 🥺</h3>";
    $i = 1;
    while ($i <= $moodLevel && $i <= 10) {
        echo "💖 ";
        $i++;
    }
    echo "<br>";

    $actions = array("Be honest with yourself and with them.", "Be mature enough to put rationality above strong emotions.", "Do not brim your mind with what you see on social media.", "Love for as they are, not as you want them to be.");
    $j = 0;
    echo "<h3>Fatherly Advices from Gyro 😄</h3>";
    do {
        echo "🟢 " . $actions[$j] . "<br>";
        $j++;
    } while ($j < count($actions));

    $lines = array(
        "Do not ever let others define you, only you, yourself can do so.😣",
        "Never date for puppy love nor fling, it promotes horrible issues once you're ready to settle down. 😭",
        "Everybody's time is just as valid as yours, do not waste theirs with insincerity. 😢",
        "Be rational, don't ever drive yourself away with strong emotions. 😘"
    );
    echo "<h3>Words Of Wisdom 😤</h3>";
    $count = 1;
    foreach ($lines as $line) {
        echo "{$count}. {$line}<br>";
        $count++;
    }

    $bonus = $extra ? "✍ BONUS TIP 😽: <br><br> Be the person that'll get other people jealous of your partner, not the other way around." : "🤭 No tips for now, I know you know what you are doing and I'm proud! 🤗";
    echo "<br><b>{$bonus}</b>";
    echo "<br><br><br><b>HATE RESPONSIBILITIES? DON'T GET MARRIED OR GET MARRIED BUT DON'T HAVE KIDS!!!<br>";
}
?>
</body>
</html>
