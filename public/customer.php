<?php

require_once '../config/header.inc.html' ?>

<div class="row container">
    <div class="col s12">
        <p>&nbsp;</p>
        <h5 class="light">Cadastro de Clientes</h5>
        <hr>
        <?php
        if (isset($_SESSION['sucesso'])) :
            echo "<p class='center green lighten-2 white-text' padding:10px'>";
            echo $_SESSION['sucesso'];
            unset($_SESSION['sucesso']);

            echo "</p>";
        elseif (isset($_SESSION['erro'])) :
            echo "<p class='center red lighten-2 white-text' padding:10px'>";
            echo $_SESSION['erro'];
            unset($_SESSION['erro']);

            echo "</p>";
        endif;
        require_once '../forms/form-add-customer.php' ?>
    </div>
</div>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Clientes Cadastrados</h5>
        <table class="striped">
            <thead>
                <tr>
                    <th>Cód.</th>
                    <th>Nome</th>
                    <th>Dt.Nascimento</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <?php
            require_once '../database/customer/read.php';
            ?>
        </table>
    </div>
</div>

<?php require_once '../config/footer.inc.html' ?>