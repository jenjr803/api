<style>
    p {
        font-size: 24px;
        font-weight: normal;
    }
</style>
<h2 class="text-center">EXPERIENCE</h2>
<div class="row row-cols-1">
    <?php
    $rows = $Exp->all();
    foreach ($rows as $row) {
    ?>
        <div class="col">
            <h2><?= $row['year']; ?></h2>
            <p><?= $row['exp']; ?></p>
        </div>
    <?php
    }
    ?>
</div>