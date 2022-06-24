<?php

    require_once('Conexao.php');

    class Profissional {
        private $nomeProfissional;
        private $cpfProfissional;
        private $rgProfissional;

        public function getNomeProfissional () {
            return $this->nomeProfissional;
        }

        public function setNomeProfissional ($nomeProfissional) {
            $this->nomeProfissional = $nomeProfissional;
        }

        public function getCpfProfissional () {
            return $this->cpfProfissional;
        }

        public function setCpfProfissional ($cpfProfissional) {
            $this->cpfProfissional = $cpfProfissional;
        }

        public function getRgProfissional () {
            return $this->rgProfissional;
        }

        public function setRgProfissional ($rgProfissional) {
            $this->rgProfissional = $rgProfissional;
        }

        public function cadastrar ($profissional) {
            $conexao = Conexao :: conectar();
            $stmt = $conexao->prepare("INSERT INTO tbprofissional(nomeprofissional,cpfprofissional,rgprofissional) VALUES(?,?,?)");
            $stmt->bindValue(1, $profissional->getNomeProfissional());
            $stmt->bindValue(2, $profissional->getCpfProfissional());
            $stmt->bindValue(3, $profissional->getRgProfissional());

            $stmt->execute();
        }
    }
?>