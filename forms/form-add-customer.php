<form action="../database/customer/create.php" method="POST" class="row">
    <div class="input field col s12">
        <input type="text" name="name" id="name" required autofocus>
        <label for="name">Digite o nome do cliente:</label>
    </div>
    <div class="input field col s12">
        <input type="date" name="birthdate" id="birthdate" autofocus>
        <label for="birthdate">Digite a data de nascimento:</label>
    </div>
    <div class="input field col s12">
        <input type="text" name="cpf" id="cpf" required autofocus>
        <label for="cpf">Digite o CPF:</label>
    </div>
    <div class="input field col s12">
        <input type="text" name="rg" id="rg" autofocus>
        <label for="rg">Digite o RG:</label>
    </div>
    <div class="input field col s12">
        <input type="text" name="phone" id="phone" autofocus>
        <label for="phone">Digite o número do telefone:</label>
    </div>
    <div class="input-field col s12">
        <input type="submit" value="salvar" class="btn">
        <input type="reset" value="limpar" class="btn red">
    </div>
</form>