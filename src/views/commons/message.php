<?php

?>
<div class="col-md-8 ms-auto me-auto" style="color: red; margin-top: 50px;">
    <?php
    if (isset($_SESSION['error'])) {
        echo "<h4>{$_SESSION['error']}</h4>";
        echo "<h4>Vì lỗi gì đó!</h4>";
        unset($_SESSION['error']);
    }
    ?>
</div>
<div style="color: green">
    <?php
    if (isset($_SESSION['success'])) {
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
</div>