<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}
require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/nav.php';
?>
<div class="container">
 <h3 class="mt-3 text-danger"> Welcome <?php if (isset($_SESSION['id'])) {
    echo ucfirst($_SESSION['firstname']) . " " . ucfirst($_SESSION['lastname']);
}?> </h3>
</div>
<?php require_once 'partials/js.php'; ?>
</body>
</html>
