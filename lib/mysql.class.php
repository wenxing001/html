<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mysql
 *
 * @author Administrator
 */
class mysql {

    private  $link;
    private  $server,$username,$passowrd,$db;
    
    public function __construct($server,$username,$password,$db) {
        $this->server=$server;
        $this->username=$username;
        $this->password=$password;
        $this->db=$db;
    }
}
?>
