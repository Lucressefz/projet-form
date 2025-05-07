<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        # Si la checkbox est cochée, et les autres champs sont remplies : true sinon, false
        $admin = isset($_POST['admin']) ? 1 : 0;

    
    }
?>
      