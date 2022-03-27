<form action="../database/customer/update.php" method="post" class="row">
    <div class="input filed col s12">
        <input type="hidden" name="id" value="<?php echo $values['id'] ?>">
    </div>
    <div class="input field col s12">
        <input type="text" name="name" id="name" value="<?php echo $values['name'] ?>" required>
        <label for="name">Digite o nome do cliente:</label>
    </div>
    <div class="input field col s12">
        <input type="date" name="birthdate" id="birthdate" value="<?php echo $values['birthdate'] ?>">
        <label for="birthdate">Digite a data de nascimento:</label>
    </div>
    <div class="input field col s12">
        <input type="text" name="cpf" id="cpf" value="<?php echo $values['cpf'] ?>">
        <label for="cpf">Digite o CPF:</label>
    </div>
    <div class="input field col s12">
        <input type="text" name="rg" id="rg" value="<?php echo $values['rg'] ?>">
        <label for="rg">Digite o RG:</label>
    </div>
    <div class="input field col s12">
        <input type="text" name="phone" id="phone" value="<?php echo $values['phone'] ?>">
        <label for="phone">Digite o número do telefone:</label>
    </div>
    <div class="input field col s12">
        <input type="submit" value="alterar" class="btn">
        <a href="customer.php" class="btn red">cancelar</a>
    </div>
</form>