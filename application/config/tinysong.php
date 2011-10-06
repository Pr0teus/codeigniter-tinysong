<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * TinySong
 *
 * An open source librarie for TinySong and CodeIgniter
 *
 * @package		Tinysong
 * @author		Felipe A. Espósito A.K.A Pr0teus
 * @since		Version 1.0
 * @filesource
 **/
/*
 * Your OWN api key
 * 
 */
$config['API_KEY'] = "" ;
/*
 * Default returns encode
 * json, xml, collon
 * if nothing is set collon is default. 
 */
$config['default_encode'] = "json" ;


/*
 * The hex color code provided here changes the player"s font color, along with the buttons for the player (not background color).
 */
$config['widget_bbg'] = "B4D5DA" ;

/*
 * 
 */

$config['widget_bth'] = "B4D5DA" ;
/*
 * The hex color code provided here changes the hover background of the player buttons.
 */
$config['widget_pfg'] = "B4D5DA" ;
/*
 * The hex color code provided here changes the volume control hover color (not the background).
 */
$config['widget_lfg'] = "B4D5DA" ;
/*
 * 
 */
$config['widget_bt'] = "813B45" ;
/*
 * The hex color code provided here changes the footer font color.
 */
$config['widget_pbg'] = "813B45" ;
/*
 * The hex color code provided here changes the footer hover font color.
 */
$config['widget_pfgh'] = "813B45" ;
/*
 * The hex color code provided here changes the background of the footer.
 */
$config['widget_si'] = "813B45" ;
/*
 * The hex color code provided here changes the song listing font color.
 */
$config['widget_lbg'] = "813B45" ;
/*
 * The hex color code provided here changes the background of the song listing rows.
 */
$config['widget_lfgh'] = "813B45" ;
/*
 * The hex color code provided here changes the selected/hovered song listing font color.
 */
$config['widget_sb'] = "813B45" ;
/*
 * The hex color code provided here changes the selected/hovered song listing row backgrounds.
 */
$config['widget_bfg'] = "B1BABF" ;

/*
 * 
 */

$config['widget_pbgh'] = "B1BABF" ;
/*
 * The hex color code provided here changes the color of the scroll bar for the listing of songs.
 */
$config['widget_lbgh'] = "B1BABF" ;
/*
 * The hex color code provided here changes the hover color of the scroll bar for the listing of songs.
 */
$config['widget_sbh'] = "B1BABF" ;

/*
 * This parameter changes whether the first song begins playing as soon as the player is loaded or not. p=0 means it doesn"t play on load and p=1 means it does.
 */
$config['widget_p'] = "1" ;