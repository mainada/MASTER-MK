<?php
/*





55

44444

* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
//if (($_SERVER['REMOTE_ADDR'] == '217.126.236.165') || ($_SERVER['REMOTE_ADDR'] == '79.155.227.49')) {
    /*
    if ($_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI] == "mainada.es"){
        header("Location: http://www.mainada.es/tienda_bebe333"); 
    }
    */
    define("CSSVERSION","1.005");
    $deny = array("188.143.232.70","95.16.84.112","88.198.180.41","62.109.19.56","192.31.186.139","94.23.149.49","37.252.12.169","195.208.0.104","78.155.208.6","37.252.12.169","78.110.50.118","31.220.16.162", "62.152.35.153", "199.182.166.196", "88.214.230.62", "89.175.253.3", "185.26.122.45");
    if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
        header("location: http://www.google.com/");
    exit();
    } 

    error_reporting(0);
    require(dirname(__FILE__).'/config/config.inc.php');
    Dispatcher::getInstance()->dispatch();   
//}else{
//    header("Location: http://www.mainada.es/tienda_bebe22"); /* Redirigir al navegador */
//}