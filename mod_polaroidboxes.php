<?php
/**
 * Polaroid Boxes Module
 * 
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once( dirname(__FILE__).DS.'helper.php' );

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base(true).'/modules/mod_polaroidboxes/style.css');

$polaroid_text = modPolaroidBoxesHelper::getBoxText( $params );
$polaroid_angle = modPolaroidBoxesHelper::getAngle( $params );
$polaroid_img = modPolaroidBoxesHelper::getImg( $params );
$polaroid_img_alt = modPolaroidBoxesHelper::getAltText( $params );
$polaroid_link = modPolaroidBoxesHelper::getLink( $params );

require( JModuleHelper::getLayoutPath( 'mod_polaroidboxes' ) );
?>
