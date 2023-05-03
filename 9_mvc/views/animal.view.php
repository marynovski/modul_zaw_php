<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Animals</title>
</head>
<body>
    <ul>
        <?php foreach ($animals as $animal): ?>
            <li><?= $animal->getName() ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
