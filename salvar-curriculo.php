<?php
    switch($_REQUEST["acao"]) {

        case 'cadastrar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $cidade = $_POST["cidade"];
            $habilidades = $_POST["habilidades"];
            $linguagens = $_POST["linguagens"];
            $experiencia = $_POST["experiencia"];
            $educacao = $_POST["educacao"];
            $linkedin = $_POST["linkedin"];
            $perfil = $_POST["perfil"];

            $sql = "INSERT INTO usuario 
                        (nome, telefone, email, cidade, habilidades, linguagens, experiencia, educacao, linkedin, perfil)
                        VALUES
                        ('{$nome}', '{$telefone}', '{$email}', '{$cidade}', '{$habilidades}', '{$linguagens}', '{$experiencia}', '{$educacao}', '{$linkedin}', '{$perfil}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>location.href='?page=listar';</script>";
            } else{
                print "<script>alert('Não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
        break;   
        
        case 'editar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $cidade = $_POST["cidade"];
            $habilidades = $_POST["habilidades"];
            $linguagens = $_POST["linguagens"];
            $experiencia = $_POST["experiencia"];
            $educacao = $_POST["educacao"];
            $linkedin = $_POST["linkedin"];
            $perfil = $_POST["perfil"];

            $sql = "UPDATE usuario SET
                        nome='{$nome}',
                        telefone='{$telefone}',
                        email='{$email}',
                        cidade='{$cidade}',
                        habilidades='{$habilidades}',
                        linguagens='{$linguagens}',
                        experiencia='{$experiencia}',
                        educacao='{$educacao}',
                        linkedin='{$linkedin}',
                        perfil='{$perfil}'";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>location.href='?page=listar';</script>";
            } else{
                print "<script>alert('Não foi possivel editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            } 
        break;   
        
        case 'excluir':
            $sql = "DELETE FROM usuario";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>location.href='?page=listar';</script>";
            } else{
                print "<script>alert('Não foi possivel excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            } 
        break;       
    }

?>    