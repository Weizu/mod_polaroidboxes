<?php
/**
 * Polaroid Boxes Module
 * 
 * Helper Class
 */
 
class modPolaroidBoxesHelper
{
    /**
     * Texte affiché sur la Polaroid
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public static function getBoxText( $params )
    {
    	$text = $params->get('polaroid_text', '');
        return $text;
    }
    /**
     * Angle du polaroid
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public static function getAngle( $params )
    {
    	$angle = $params->get('polaroid_angle', 0);
        return $angle;
    }
    /**
     * URL de l'image
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public static function getImg( $params )
    {
    	$img = $params->get('polaroid_img', '');
        return $img;
    }
    /**
     * Message alternatif au sein de l'image
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public static function getAltText( $params )
    {
    	$imgalt = $params->get('polaroid_img_alt', '');
        return $imgalt;
    }
    /**
     * URL du lien
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public static function getLink( $params )
    {
    	$link = $params->get('polaroid_link', '#');
        return $link;
    }
}
?>