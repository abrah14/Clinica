<?php

    $login = $_POST['txtLogin'];

    $senha = $_POST['txtSenha'];



    //verificar se conferem login=adm e senha=123

    if( ($login == 'adm') && ($senha == '123') ){

        //criar a sessão, guardar os dados e redirecionar para a index-restrita.php

        header("Location: restrict-index.php");

        session_start(); //tem precedência de cabeçalho, deve ser a 1ª linha do seu bloco

        $_SESSION['login-session'] = $login;

        $_SESSION['senha-session'] = $senha;

    }

    else{

        header("Location: login.php");

    }
