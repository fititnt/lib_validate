<?php

/**
 * @package     Validate Library
 * @author      Emerson Rocha Luiz - emerson at webdesign.eng.br - fititnt
 * @copyright   Copyright (C) 2011 Webdesign Assessoria em Tecniligia da Informacao. All rights reserved.
 * @license     GNU General Public License version 3. See license.txt
 */
defined('JLIBV_PATH') or die('Restricted access');

/**
 *
 */
abstract class ValidateLib {

    /**
     *
     * @var Object $generic
     */
    public static $generic;
    
    /**
     *
     * @var Object $region
     */
    public static $region;

    /**
     * Return Generic Object, creating if aready doesent exists
     *
     * @return Object $generic
     */
    public static function getGeneric() {
        if (!self::$generic) {
            jimport('validade.generic.load');

            self::$generic = LoadGeneric::getInstance();
        }
        return self::$generic;
    }

    /**
     * Return Region Object, creating if aready doesent exists
     *
     * @return Object $region
     */
    public static function getRegion() {
        if (!self::$region) {
            jimport('validade.region.load');

            self::$region = LoadRegion::getInstance();
        }
        return self::$region;
    }
}