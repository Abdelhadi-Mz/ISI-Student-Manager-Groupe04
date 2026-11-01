<?php
$projets = [
    "Application de gestion des étudiants",
    "Site web de bibliothèque",
    "Application de gestion des absences",
    "Plateforme de gestion des stages"
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des projets</title>
</head>
<body>

    <h1>Liste des projets</h1>

    <ul>
        <?php foreach ($projets as $projet): ?>
            <li><?php echo htmlspecialchars($projet); ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>