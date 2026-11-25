<?php

$host = '127.0.0.1';
$database = 'bwataid';
$username = 'root';
$password = '';

try {
	$pdo = new PDO(
		"mysql:host={$host};dbname={$database};charset=utf8mb4",
		$username,
		$password,
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
	);
} catch (PDOException $exception) {
	http_response_code(500);
	exit('échec de connexion a la base de donné.');
}
// US3

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération et nettoyage
    $titre = trim($_POST['titre'] ?? '');
    $description = trim($_POST['description'] ?? '');
    // (Ajoute la récupération du username si nécessaire)

    // Validation coté serv
    if (empty($titre) || empty($description)) {
        $erreur = "Le titre et la description sont obligatoires.";
    } else {
        // Requête préparée sécurisée
        $sql = "INSERT INTO suggestions (titre, description, username, date_creation) 
                VALUES (:titre, :description, :username, NOW())";

        $stmt = $db->prepare($sql);
        $stmt->execute([
            ':titre' => $titre,
            ':description' => $description,
            ':username' => 'utilisateur_actuel' 
        ]);

        echo "Idée enregistrée avec succès !";
    }
}
?>/