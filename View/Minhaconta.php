<div class="paginaConteudo">
    <h1>Minha conta</h1>
    <br>
    <p><span class="bold">Nome: </span> <?= $_SESSION["nomeusuario"]; ?></p>
    <p><span class="bold">E-mail: </span> <?= $_SESSION["email"]; ?></p>
    <p><span class="bold">Data do cadastro: </span> <?= date("d/m/Y H:i:s", strtotime($_SESSION["data"])); ?></p>
</div>