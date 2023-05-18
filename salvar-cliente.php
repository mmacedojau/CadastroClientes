<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $data = $_POST["data"];

            $sql = "INSERT INTO idclientes (nome, telefone, email, data) VALUES ('{$nome}','{$telefone}','{$email}','{$data}')";

            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Cliente Cadastrado com Sucesso !');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar o cliente');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $data = $_POST["data"];


            $sql = "UPDATE idclientes SET
                        nome='{$nome}',
                        telefone='{$telefone}',
                        email='{$email}',
                        data='{$data}'
                    WHERE
                        id=".$_REQUEST["id"];


            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Editado dados do Cliente com Sucesso !');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar o cliente');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;


        
        case 'excluir':
            $sql = "DELETE FROM idclientes WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Cliente Excluido com Sucesso !');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir o cliente');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }