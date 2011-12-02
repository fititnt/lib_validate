<?php

/**
 * @package     Validate Library
 * @author      Emerson Rocha Luiz - emerson at webdesign.eng.br - fititnt
 * @copyright   Copyright (C) 2011 Webdesign Assessoria em Tecnologia da Informacao. All rights reserved.
 * @license     GNU General Public License version 3. See license.txt
 */
defined('JDLIB_PATH') or die('Restricted access');

class LoadGeneric {

    /**
     *
     * @return instance JLibVGeneric 
     */
    public static function getInstance() {
        require_once dirname(__FILE__) . DS . 'generic.php';
        $instance = new JLibVGeneric();
        return $instance;
    }

}