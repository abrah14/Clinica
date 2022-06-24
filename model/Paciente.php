<?php

    require_once('Conexao.php');

    class Paciente{
        private $nomePaciente;
        private $idPaciente;
        private $cpfPaciente;
        private $dtNascimentoPaciente;
        private $emailPaciente;
        private $fonePaciente;
        private $celularPaciente;
        private $rgPaciente;

        public function getNomePaciente () {
            return $this->nomePaciente;
        }

        public function setNomePaciente ($nomePaciente) {
            $this->nomePaciente = $nomePaciente;
        }

        public function getIdPaciente () {
            return $this->idPaciente;
        }

        public function setIdPaciente ($idPaciente) {
            $this->idPaciente = $idPaciente;
        }

        public function getCpfPaciente () {
            return $this->cpfPaciente;
        }

        public function setCpfPaciente ($cpfPaciente) {
            $this->cpfPaciente = $cpfPaciente;
        }

        public function getDtNascimentoPaciente () {
            return $this->dtNascimentoPaciente;
        }

        public function setDtNascimentoPaciente ($dtNascimentoPaciente) {
            $this->dtNascimentoPaciente = $dtNascimentoPaciente;
        }

        public function getEmailPaciente () {
            return $this->emailPaciente;
        }

        public function setEmailPaciente ($emailPaciente) {
            $this->emailPaciente = $emailPaciente;
        }

        public function getFonePaciente () {
            return $this->fonePaciente;
        }

        public function setFonePaciente ($fonePaciente) {
            $this->fonePaciente = $fonePaciente;
        }

        public function getCelularPaciente () {
            return $this->celularPaciente;
        }

        public function setCelularPaciente ($celularPaciente) {
            $this->celularPaciente = $celularPaciente;
        }

        public function getRgPaciente () {
            return $this->rgPaciente;
        }

        public function setRgPaciente ($rgPaciente) {
            $this->rgPaciente = $rgPaciente;
        }

        public function cadastrar ($paciente) {
            $conexao = Conexao :: conectar();
            $stmt = $conexao->prepare("INSERT INTO tbpaciente(nomepaciente,cpfpaciente,dataNascPaciente,emailpaciente,
                                        telefonepaciente,celularpaciente,rgpaciente) VALUES(?,?,?,?,?,?,?)");
            $stmt->bindValue(1, $paciente->getNomePaciente());
            $stmt->bindValue(2, $paciente->getCpfPaciente());
            $stmt->bindValue(3, $paciente->getDtNascimentoPaciente());
            $stmt->bindValue(4, $paciente->getEmailPaciente());
            $stmt->bindValue(5, $paciente->getFonePaciente());
            $stmt->bindValue(6, $paciente->getCelularPaciente());
            $stmt->bindValue(7, $paciente->getRgPaciente());

            $stmt->execute();
        }

    }

?>