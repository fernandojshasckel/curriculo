<h3>Meu curriculo</h3>
<br>
<hr>
<?php 
    $sql = "SELECT * FROM usuario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        while($row = $res->fetch_object()){
            print "<h5>Nome<h5>";
            print "<p>$row->nome</p>";  
            print "<hr>"; 
            print "<h5>Telefone<h5>";
            print "<p>$row->telefone</p>";
            print "<hr>";
            print "<h5>E-mail<h5>";
            print "<p>$row->email</p>";
            print "<hr>";
            print "<h5>Cidade<h5>";
            print "<p>$row->cidade</p>";
            print "<hr>";
            print "<h5>Habilidades<h5>";
            print "<p>$row->habilidades</p>";
            print "<hr>";
            print "<h5>Linguagens<h5>";
            print "<p>$row->linguagens</p>";
            print "<hr>";
            print "<h5>Experiência<h5>";
            print "<p>$row->experiencia</p>";
            print "<hr>";
            print "<h5>Educação<h5>"; 
            print "<p>$row->educacao</p>";
            print "<hr>";
            print "<h5>Linkedin<h5>";
            print "<p>$row->linkedin</p>";
            print "<hr>";
            print "<h5>Sobre mim<h5>";
            print "<p>$row->perfil</p>";
            print "<hr>";
            print "<br>
                       <button onclick=\"location.href='?page=editar&id=".$row->id."';\">
                            Editar
                       </button>

                       <button 
                        onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                                    location.href='?page=salvar&acao=excluir';
                                }else{false;}\">
                            Apagar
                       </button>
                   <br>";
            print "<br>";
            print "<hr>";
        }
        print "</table>";
    } else{
        print "<p class='alert alert-danger'>Nenhum curriculo cadastrado!</p>";
    }

?>