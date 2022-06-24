<?php
    header('Location: ../index.php');
    require_once ("../model/Paciente.php");

    $nome = $_POST["txtNome"];
    $rg = $_POST["txtRg"];
    $cpf = $_POST["txtCpf"];
    $telefone = $_POST["txtTelefone"];
    $celular = $_POST["txtCelular"];
    $dataNasc = $_POST["dtNascimento"];
    $email = $_POST["txtEmail"];

    $paciente = new Paciente();

    $paciente->setNomePaciente($nome);
    $paciente->setRgPaciente($rg);
    $paciente->setCpfPaciente($cpf);
    $paciente->setDtNascimentoPaciente($dataNasc);
    $paciente->setFonePaciente($telefone);
    $paciente->setCelularPaciente($celular);
    $paciente->setEmailPaciente($email);

    $paciente->cadastrar($paciente);

?>