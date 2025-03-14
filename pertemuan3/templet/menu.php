<?php
$menus = [
    "Home" => "index.php",
    "About me" => "aboutme.php",
    "Study" => "study.php",
    "Contact" => "kontak.php",
    "Quotes" => "Quotes.php",
];
?>

<!-- Sidebar -->
<div class="border-end" id="sidebar-wrapper" style="background-color: cyan; min-height: 100vh;">
    <div class="sidebar-heading border-bottom text-dark">Start Bootstrap</div>
    <div class="list-group list-group-flush">
        <?php foreach ($menus as $menu => $value): ?>
            <a class="list-group-item p-3" href="<?= $value ?>" 
               style="background-color: cyan; color: black; border: none;">
                <?= $menu ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>

