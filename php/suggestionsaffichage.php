<?php 
require_once __DIR__ . '/config/db.php';
$pdo = getPDO();

$requetaffiche = $pdo->query(
    'SELECT * FROM suggestions ORDER BY dates DESC'
);
$suggestions = $requetaffiche->fetchAll();
?>

<?php if (count($suggestions) === 0): ?>
    <p>aucun résultat trouvé</p>
<?php else: ?>
    <?php foreach ($suggestions as $suggestion): ?>
        <div>
            <p><?= htmlspecialchars($suggestion['titles']) ?></p>
            <p><?= htmlspecialchars($suggestion['descriptions']) ?></p>
            <p><?= htmlspecialchars($suggestion['usernames']) ?></p>
            <p><?= $suggestion['votes'] ?> votes</p>
            <p>créé le <?= htmlspecialchars($suggestion['dates']) ?></p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>