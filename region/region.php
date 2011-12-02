<?php

/**
 * @package     Validate Library
 * @author      Emerson Rocha Luiz - emerson at webdesign.eng.br - fititnt
 * @copyright   Copyright (C) 2011 Webdesign Assessoria em Tecnologia da Informacao. All rights reserved.
 * @license     GNU General Public License version 3. See license.txt
 */
defined('JLIBV_PATH') or die('Restricted access');

class JLibVRegion {

    /**
     * 
     */
    public function __construct() {
        //
    }

    /**
     * 
     */
    function __destruct() {
        //
    }

    /**
     * Delete (set to NULL) generic variable
     * 
     * @param String $name: name of var do delete
     * @return Object $this
     */
    public function del($name) {
        $this->$name = NULL;
        return $this;
    }

    /**
     * Return generic variable
     * 
     * @param String $name: name of var to return
     * @return Mixed this->$name: value of var
     */
    public function get($name) {
        return $this->$name;
    }

    /**
     * Set one generic variable the desired value
     * 
     * @param String $name: name of var to set value
     * @param Mixed $value: value to set to desired variable
     * @return Object $this
     */
    public function set($name, $value) {
        $this->$name = $value;
        return $this;
    }
}

