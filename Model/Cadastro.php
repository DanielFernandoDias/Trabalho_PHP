<?php
    require_once '../Model/usuario.php';
    class Cadastro {
        // Properties
        private $name;
        private $cpf;
        private $num_card;
        private $password;
        private $phone_num;
        private $email;
        public $usuario;

        // Methods
        public function __construct($login, $senha) {
            $this->usuario = new Usuario($login, $senha);
        }
    
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        function set_cpf($cpf) {
            $this->cpf = $cpf;
        }
        function get_cpf() {
            return $this->cpf;
        }
        function set_num_card($num_card) {
            $this->num_card = $num_card;
        }
        function get_num_card() {
            return $this->num_card;
        }
        function set_password($password) {
            $this->password = $password;
        }
        function get_password() {
            return $this->password;
        }
        function set_phone_num($phone_num) {
            $this->phone_num = $phone_num;
        }
        function get_phone_num() {
            return $this->phone_num;
        }
        function set_email($email) {
            $this->email = $email;
        }
        function get_email() {
            return $this->email;
        }
        function print_data() {
            echo "Nome: ",$this->get_name();
        }
    }
?>