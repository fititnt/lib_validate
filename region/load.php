<?php

/**
 * @package     Validate Library
 * @author      Emerson Rocha Luiz - emerson at webdesign.eng.br - fititnt
 * @copyright   Copyright (C) 2011 Webdesign Assessoria em Tecnologia da Informacao. All rights reserved.
 * @license     GNU General Public License version 3. See license.txt
 */
defined('JDLIB_PATH') or die('Restricted access');

class LoadRegion {

    /**
     *
     * @return instance JLibVRegion 
     */
    public static function getInstance() {
        require_once dirname(__FILE__) . DS . 'region.php';
        $instance = new JLibVRegion();
        return $instance;
    }

}