<h3>Cadastro de curriculo</h3>
<br>
<hr>
<br>
<form action="?page=salvar" method="POST">

    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Nome Sobrenome">
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" class="form-control" placeholder="(00) 00000-0000">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="email@email.com">
    </div>

    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control" placeholder="Cidade">
    </div>

    <div class="mb-3">
        <label>Habilidades</label>
        <input type="text" name="habilidades" class="form-control" placeholder="Minhas habilidades">
    </div>

    <div class="mb-3">
        <label>Linguagens</label>
        <input type="text" name="linguagens" class="form-control" placeholder="Linguagens">
    </div>

    <div class="mb-3">
        <label>Experiência</label>
        <input type="text" name="experiencia" class="form-control" placeholder="Experiência">
    </div>

    <div class="mb-3">
        <label>Educação</label>
        <input type="text" name="educacao" class="form-control" placeholder="Educação">
    </div>

    <div class="mb-3">
        <label>Linkedin</label>
        <input type="text" name="linkedin" class="form-control" placeholder="Linkedin">
    </div>

    <div class="mb-3">
        <label>Perfil</label>
        <input type="text" name="perfil" class="form-control" placeholder="Sobre mim">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>

</form>