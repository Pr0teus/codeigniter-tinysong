# ***NOTICE***
Due to recent legal problems of GrooveShark their services and API's were shut down :( 
you can read their statement at http://grooveshark.com/.
Now this API is useless until someone bring that amazing service from dead.
Me and all the Internet is suffering from the lack of the service. =/


***


# Welcome to TinySong Library!

This is a Tinysong Library for CodeIgniter! you're welcome to download and try!

# How it works ?

You have to follow those simple steps:

1. -Go to http://tinysong.com/api and REQUEST your own API key
2. -Download my Library at Download button at the top
3. -Try it in a new install of Codeigniter and then apply to your project
Remember there is no Garantee!

# How to use it:

As much as any library in Codeigniter you can load as:
` $this->load->library("Tinysong"); `
After this you can use it as any library:

` $this->Tinysong->getSongURL("songname"); `
You can also read the Tinysong API to be sure what is be doing just follow the link http://tinysong.com/api Tinysong implements 3 simple methods

Tinysong Library easy works with the same 3 methods as the API

GetSongURL returns the same as /a/

` $this->Tinysong->getSongURL("Song name"); `
GetSongMeta returns the same as /b/

` $this->Tinysong->getSongMeta("Song name"); `
GetSongs returns the same as /s/

`$this->Tinysong->getSongs("Song name");`
FlashWidgets:

Restrictions and Purpose Widgets are designed to easily allow developers and users to add music to their website for their visitors to enjoy. They cannot be controlled via Javascript and there are no hooks to listen for when a song ends or begins. They are based on prior knowledge of songIDs or playlistIDs. They can be generated a customized from the Grooveshark website. So you can use methods above to get the SongsIDs.
To load a simple song with flash Widget

`$this->Tinysong->getFlashWidget("Name of song");`
And to use the List flash widget

`$this->Tinysong->getFlashListWidget(ID of the PlayList);`
Some considerations:

You can use a config file to load default configs its turns easy when you have to use this library in more then one controller. or you can simply change some values on the fly Spent some time reading the de TinySong Library under the Library path.
`$this->Tinysong->setWidth("200");`
`$this->Tinysong->setHeight("200");`
