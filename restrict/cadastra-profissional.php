<?php
    header('Location: ../index.php');
    require_once ("../model/Profissional.php");

    $nomeProfissional = $_POST["txtNomeProfissional"];
    $rgProfissional = $_POST["txtRgProfissional"];
    $cpfProfissional = $_POST["txtCpfProfissional"];

    $profissional = new Profissional();

    $profissional->setNomeProfissional($nomeProfissional);
    $profissional->setRgProfissional($rgProfissional);
    $profissional->setCpfProfissional($cpfProfissional);

    $profissional->cadastrar($profissional);

?>