<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php print $title;?></title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>

<h1>Welcome to <?php print $title;?>!</h1>

<p>Hey all!</p>
<p>This is my Tinysong Library for CodeIgniter! you`re welcome to download and try!</p>
<p> How it works ?</p>
<p>You have to follow those simple steps:
<ol>
<li> Go to <a href="http://tinysong.com/api">http://tinysong.com/api</a> and <strong>REQUEST</strong> your own API key</li>
<li> Download my Library at <strong>Download</strong> button at the top</li>
<li> Try it in a new install of Codeigniter and then apply to your project</li>

</ol>
<strong>Remember there is no Garantee!</strong>
<h2>How to use it:</h2>
<p> As much as any library in Codeigniter you can load as:</p>
<code>$this->load->library("Tinysong");</code>
<p> After this you can use it as any library:</p>
<code>$this->Tinysong->getSongURL("songname");</code>
<p>You can also read the Tinysong API to be sure what is be doing just follow the link
<a href="http://tinysong.com/api">http://tinysong.com/api</a>
Tinysong implements 3 simple methods</p>
<p> Tinysong Library easy works with the same 3 methods</p>
<p> <strong>GetSongURL</strong> returns the same as /a/</p>
<code>$this->Tinysong->getSongURL("Song name");</code>
<p> <strong>GetSongMeta</strong> returns the same as /b/</p>
<code>$this->Tinysong->getSongMeta("Song name");</code>
<p> <strong>GetSongs</strong> returns the same as /s/</p>
<code>$this->Tinysong->getSongs("Song name");</code>
<h2>FlashWidgets:</h2>
Restrictions and Purpose
Widgets are designed to easily allow developers and users to add music to their website for their visitors to enjoy. They cannot be controlled via Javascript and there are no hooks to listen for when a song ends or begins. They are based on prior knowledge of songIDs or playlistIDs. They can be generated a customized from the Grooveshark website.
So you can use methods above to get the SongsIDs.
<p>To load a simple song with flash Widget</p>
<code>$this->Tinysong->getFlashWidget("Name of song");</code>
<p>And to use the List flash widget</p>
<code>$this->Tinysong->getFlashListWidget(ID of the PlayList);</code>
<h2>Some considerations:</h2>
You can use a config file to load default configs its turns easy when you have to use this library in more then one controller.
or you can simply change some values on the fly
Spent some time reading the de TinySong Library under the Library path.
<code>$this->Tinysong->setWidth("200");<br/>
	  $this->Tinysong->setHeight("200");
</code>
</body>
</html>