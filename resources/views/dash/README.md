Start Bootstrap - SB Admin 2
=========

Warning: you have to put this files in a HTTP Server and access the site through
this server. Double clicking index.html won't work.

Tip: To install a HTTP Server in seconds, just open a terminal with Python available,
change to the directory where your index.html is contained and type
"python -m SimpleHTTPServer". Then access http://localhost:8000/index.html using
your browser.


Description:

This is a modified version (see angularmod branch). It uses Angular.js to organize
better the page contents. HTML regarding menus are all in a single file
(templates/navigation.html), while the real content are all in the partials folder,
without the code from menus.

It also loads the page contents without refreshing the whole page, thanks to Angular.js.

Please take a look at the file js/main.js. It is responsible for loading all the
pages using Angular.js. It will be useful in case you want to add or remove the
existing pages.


Enjoy.
