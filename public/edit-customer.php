<?php require_once '../config/header.inc.html' ?>

<div class="row container">
    <div class="col s12">
        <p>&nbsp;</p>
        <h5 class="light">Editar Cliente</h5>
        <hr>

        <?php
        require_once '../classes/autoload.php';

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $editMode = new Customer();
        $editMode->dataFromTable($id);
        ?>

    </div>
</div>

<?php require_once '../config/footer.inc.html' ?>