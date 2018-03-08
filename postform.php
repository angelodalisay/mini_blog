<?php
    require_once 'php/meekrodb.2.3.class.php';

    $miniblog = $_POST['miniblog'];
    DB::insert('miniblog', array('post' => $miniblog));

?>
