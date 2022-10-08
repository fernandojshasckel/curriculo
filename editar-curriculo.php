<h3>Editar curriculo</h3>

<?php 
    $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">

    <input type="hidden" name="acao" value="editar">

    <input disabled type="text" name="id" value="
    <?php print $row->id; ?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="
        <?php print $row->nome;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" value="
        <?php print $row->telefone;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="
        <?php print $row->email;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" value="
        <?php print $row->cidade;?>" class="form-control"> 
    </div>

    <div class="mb-3">
        <label>Habilidades</label>
        <input type="text" name="habilidades" value="
        <?php print $row->habilidades;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Linguagens</label>
        <input type="text" name="linguagens" value="
        <?php print $row->linguagens;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Experiência</label>
        <input type="text" name="experiencia" value="
        <?php print $row->experiencia;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Educação</label>
        <input type="text" name="educacao" value="
        <?php print $row->educacao;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Linkedin</label>
        <input type="text" name="linkedin" value="
        <?php print $row->linkedin;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Perfil</label>
        <input type="text" name="perfil" value=" 
        <?php print $row->perfil;?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>

</form>