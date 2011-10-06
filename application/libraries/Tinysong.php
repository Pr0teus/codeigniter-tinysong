<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

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

class Tinysong {
	
	private $API_KEY;
	private $API_URL = "http://tinysong.com/";
	private $encode;
	
	private $widget_width=250;
	private $widget_height=40;
	
	private $config = array();
	
	
	public function __construct(){
		$this->encode ='json'; //Default value
		$ci = &get_instance();
		$ci->config->load('tinysong',false,true);
	}
	
	public function Tinysong($config=array()){
		$this->config = $config;
	}
  
    /*
     * /s/ implementation
     */
    public function getSongURL($params=''){  	
	    $ch = curl_init();
	    $url =$this->API_URL."a/".urlencode($params)."?format=json&key=".$this->API_KEY;
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    $data = curl_exec($ch);
	    $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	    curl_close($ch);
	    if($response_code =='200'){
	    	return $data;
	    	}	
    }
    /*
    * /b/ implementation
    * @params
    * @Return an array with metadata from a Song
    */
    public function getSongMeta($params=''){
    	$ch = curl_init();
    	$url =$this->API_URL."b/".urlencode($params)."?format=json&key=".$this->API_KEY;
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    	$data = curl_exec($ch);
    	$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    	curl_close($ch);
    	if($response_code =='200'){
    		return $data;
    	}
    }
    /*
     * /s/ implementation
    */
    public function getSongs(){
    	$ch = curl_init();
    	$url =$this->API_URL."s/".urlencode($params)."?format=json&key=".$this->API_KEY;
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    	$data = curl_exec($ch);
    	$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    	curl_close($ch);
    	if($response_code =='200'){
    		return $data;
    	}
    }
    
    public function getSongID($songName){
    	$song = json_decode($this->getSongMeta($songName), true);
    	return $song['SongID'];
    }
	public function getSongNAME($songName){
    	$song = json_decode($this->getSongMeta($songName), true);
    	return $song['SongName'];
    }
    public function getSongArtistName($songName){
    	$song = json_decode($this->getSongMeta($songName), true);
    	return $song['ArtistName'];
    }	
    public function getSongAlbumName($songName){
    	$song = json_decode($this->getSongMeta($songName), true);
    	return $song['AlbumName'];
    }
    
    /*
    *
    */
    
    public function getFlashWidget($song){
    	$songID = $this->getSongID($song);
    	$widget = "<object width=\"".$this->widget_width."\" height=\"".$this->widget_height."\">
    					<param name=\"movie\" value=\"http://grooveshark.com/songWidget.swf\"/>
    					<param name=\"wmode\" value=\"window\"/>
    					<param name=\"allowScriptAccess\" value=\"always\"/>
    					<param name=\"flashvars\" value=\"hostname=cowbell.grooveshark.com&songIDs=".$songID."&style=metal&p=0\"/>
    					<embed src=\"http://grooveshark.com/songWidget.swf\" type=\"application/x-shockwave-flash\" 
    					width=\"".$this->widget_width."\" height=\"".$this->widget_height."\" 
    					flashvars=\"hostname=cowbell.grooveshark.com&songIDs".$songID."&style=metal&p=0\" 
    					allowscriptaccess=\"always\" wmode=\"window\"/>
    					</object>";
    	return $widget;
    }
    
    public function getFlashListWidget($playlistID){
    	$ci = &get_instance();
    	$ci->config->load('tinysong',true,false);
    	print $ci->config->item('default_encode');
    	$widget ="<object width=\"".$this->widget_width."\" height=\"".$this->widget_height."\">
    				  <param name=\"movie\" value=\"http://grooveshark.com/widget.swf\"/>
    				  <param name=\"wmode\" value=\"window\"/>
    			 	  <param name=\"allowScriptAccess\" value=\"always\"/>
    				  <param name=\"flashvars\" value=\"hostname=cowbell.grooveshark.com&
    				  playlistID=".$playlistID."
    				  &bbg=".$ci->config->item("widget_bbg")."
    				  &bth=".$ci->config->item("widget_bth")."
    				  &pfg=".$ci->config->item("widget_pfg")."
    				  &lfg=".$ci->config->item("widget_lfg")."
    				  &bt=".$ci->config->item("widget_bt")."
    				  &pbg=".$ci->config->item("widget_pbg")."
    				  &pfgh=".$ci->config->item("widget_pfgh")."
    				  &si=".$ci->config->item("widget_si")."
    				  &lbg=".$ci->config->item("widget_lbg")."
    				  &lfgh=".$ci->config->item("widget_lfgh")."
    				  &sb=".$ci->config->item("widget_sb")."
    				  &bfg=".$ci->config->item("widget_bfg")."
    				  &pbgh=".$ci->config->item("widget_pbgh")."
    				  &lbgh=".$ci->config->item("widget_lbgh")."
    				  &sbh=".$ci->config->item("widget_sbg")."
    				  &p=".$ci->config->item("widget_p")."\"/>
    				  <embed src=\"http://grooveshark.com/widget.swf\" type=\"application/x-shockwave-flash\" width=\"".$this->widget_width."\" height=\"".$this->widget_height."\" flashvars=\"hostname=cowbell.grooveshark.com
    				    playlistID=".$playlistID."
    				  &bbg=".$ci->config->item("widget_bbg")."
    				  &bth=".$ci->config->item("widget_bth")."
    				  &pfg=".$ci->config->item("widget_pfg")."
    				  &lfg=".$ci->config->item("widget_lfg")."
    				  &bt=".$ci->config->item("widget_bt")."
    				  &pbg=".$ci->config->item("widget_pbg")."
    				  &pfgh=".$ci->config->item("widget_pfgh")."
    				  &si=".$ci->config->item("widget_si")."
    				  &lbg=".$ci->config->item("widget_lbg")."
    				  &lfgh=".$ci->config->item("widget_lfgh")."
    				  &sb=".$ci->config->item("widget_sb")."
    				  &bfg=".$ci->config->item("widget_bfg")."
    				  &pbgh=".$ci->config->item("widget_pbgh")."
    				  &lbgh=".$ci->config->item("widget_lbgh")."
    				  &sbh=".$ci->config->item("widget_sbh")."
    				  &p=".$ci->config->item("widget_p")."\" allowscriptaccess=\"always\" wmode=\"window\"/>
    				  </object>";
    	 
    	return $widget;
    }
    
    /*
    *
    */
    public function setConfig($config=array()){
    	
    }
    /*
    *
    */
    public function setAPIKey($key){
    	$this->API_KEY = $key;
    	return $this;
    }
    
    public function setWidth($w){
    	$this->widget_width = $w;
    }
    
    public function getWidth(){
    	return $this->widget_width;
    }
    public function setHeight($h){
    	$this->widget_height = $h;
    }
    public function getHeight(){
    	return $this->widget_height;
    }
   
}

/* End of file Someclass.php */