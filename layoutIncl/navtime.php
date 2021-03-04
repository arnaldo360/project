
<div class="date">
    <i class="icon-calendar " id="clock"></i>
    <?php
    $Today = date('y:m:d');
    $new = date('l, F d, Y', strtotime($Today));
    echo $new;
    ?>
</div>
