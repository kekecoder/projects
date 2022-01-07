<?php
require_once __DIR__ . '/config/dbconfig.php';

$sql = 'SELECT `id`,`notetext` FROM `note`';
$result = $dbcon->query($sql);
?>
<?php require __DIR__ . '/templates/header.php'?>
        <a href="note.php" class="btn btn-success mt-5 mb-5 ml-5">Add a Note</a>
        <?php foreach ($result as $note): ?>
        <div class="row mb-5">
            <div class="col-8">
                <?php echo ($note['notetext']) ?>
            </div>
            <div class="col-4 d-flex d-inline">
               <form action="" method="post" class="pr-4">
                   <input type="hidden" name="id" value="<?=$note['id']?>">
                   <button class="btn btn-secondary">Edit</button>
               </form>
               <form action="" method="post">
                   <input type="hidden" name="id" value="<?=$note['id']?>">
                   <button class="btn btn-danger">Delete</button>
               </form>
            </div>
        </div>
        <?php endforeach?>
    </div>
</body>
</html>
