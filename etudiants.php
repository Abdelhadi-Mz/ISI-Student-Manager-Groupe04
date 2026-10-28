<?php

$etudiants = [
    ["nom" => "Mounir", "filiere" => "Master ISI"],
    ["nom" => "Ahmed", "filiere" => "Master ISI"],
    ["nom" => "Sara", "filiere" => "Master ISI"]
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
</head>
<body>

    <h1>Liste des étudiants</h1>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Filière</th>
        </tr>

        <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <td><?= $etudiant["nom"] ?></td>
                <td><?= $etudiant["filiere"] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>