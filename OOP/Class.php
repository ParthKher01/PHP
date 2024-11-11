<?php

    // create a class
    // using class key word we can crate class in php 
    class Bank{

        // variables 

        public $client_name;
        public $acc_type;

        function set_data($client_name, $acc_type){
            $this->client_name = $client_name;
            $this->acc_type = $acc_type;
        }

        function get_data(){
            return $this->client_name; 
        }

    }

?>