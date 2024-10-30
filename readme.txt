=== Plugin Name ===
Plugin Name: Besucherz&auml;hler
Version: 1.0
URI: http://www.fbuttons.net/besucherzaehler
Tags: Besucherz&auml;hler, Z&auml;hler, Counter, Traffic, Besucher Z&auml;hler, Besucher, Visitor counter, german, deutsch, hit counter, hits, unique, deutscher counter
Requires at least: 2.8.0
Tested up to: 3.2.1
Stable tag: trunk
PHP Version: 5.2.9
MySql Version: 5.0.91-community
Author: Nico Masserich
Contributors: nicomasserich

Dieser praktische Wordpress Besucherz&auml;hler bzw. Counter kann schnell in die eigene Webseite eingebunden werden.

== Description ==

Dieser Wordpress Besucherz&auml;hler in deutscher Sprache bietet verschiedene Optionen. Zum einen zeigt der praktische Wordpress Counter an, wieviele Seitenaufrufe es gab. Hinzu kommt eine Angabe &uuml;ber die Anzahl einzelner Besucher. Bei den einzelnen Besuchern wird jede IP-Adresse lediglich einmal gewertet. Alle Angaben werden jeweils f&uuml;r die letzten 24 Stunden, die letzten 7 Tage sowie den gesamten letzten Monat angezeigt.

Wie bindet man den Counter ein?

Gehen Sie hierzu links in Ihrer Admin-Leiste auf den Men&uuml;punkt Design und klicken Sie dann auf das Untermen&uuml; Widgets. Nun k&ouml;nnen Sie den Besucherz&auml;hler &uuml;ber die Drag und Drop Funktion problemlos mit der Maus an den Ort Ihrer Wahl ziehen um den Wordpress Besucherz&auml;hler dort platzieren - zum Beispiel in der Sidebar oder im Footer. 

Weitere Erl&auml;uterungen aller Funktionen

Desweiteren kann der Besucher selbst sehen, wieviele Besucher gerade gleichzeitig online sind. Zudem ist unser kostenloser Besucherz&auml;hler ausgestattet mit einem sogenannten Robots Filter, der den automatischen Traffic, der durch Robots oder Spider verursacht wird, filtert. Die entsprechenden Besuche werden nicht gewertet und fliessen zudem nicht in die angezeigten Angaben mit ein. Dennoch besteht die Option, dies zuzulassen oder Logfiles der entsprechenden Robots anfertigen zu lassen. Derzeit ist dieser Wordpress Counter lediglich in der deutschen Sprache verf&uuml;gbar. Wenn ausreichend Interesse besteht, werden noch andere Sprachen wie zum Beispiel Englisch hinzukommen. Der Nutzer kann zudem selbst entscheiden, ob und wenn ja, f&uuml;r wie lange Logs angelegt werden sollen. Die L&ouml;schung von Logfiles kann auch komplett unterbunden werden, jedoch muss der Benutzer diese dann in regelm&auml;ssigen Abst&auml;nden selbst vornehmen.

Dieses Widget besticht durch seine Einfachheit. Deshalb sind vorerst auch keine weiteren, zus&auml;tzlichen Optionen geplant. Dennoch sind wir nat&uuml;rlich stets offen f&uuml;r Verbesserungs- oder Erg&auml;nzungsvorschl&auml;ge.

== Installation ==

1. Upload the zip to 'plugins' directory
1. Unzip (steps 1 and 2 cand also be performed automatically)
1. Activate the plugin
1. Configure and place the widget on your sidebar


If you need your traffic stats to be more accurate, you should use the Automatic Traffic Filter on the Widget. However, the internet is full of spiders, crawlers and all kind of robots not authenticating themselves as machines. Furthermore, it is very difficult to verify the signature of each and every robot visiting your blog... But there is a pretty good solution to this. I cannot access the root directory of your blog through Wordpress install API, so you will have to do the following things by yourself:


1. Create a robots.php file on the root directory of your blog: ie public_html/your-blog/
Paste the following code in it:

<?php
session_start();
$_SESSION['wtcrobot'] = 1;
echo file_get_contents('robots.txt');
exit;
?>

1. Open .htaccess file in the same directory and paste this in it:

RewriteRule robots\.txt robots.php

1. Make sure you have the 'RewriteEngine On' clause in place...

1. Make sure you have a robots.txt file, even an empty one, on the root directory

Done! Most of the robots will be filtered out by TCW.



Besucherz&auml;hler does not have a settings section on Admin page. However, you can set the fields descriptions on the widget

== Screenshots ==

1. On the blog the widget looks like this:
2. On admin you can translate the text on the widget in your language. This example shows romanian.
3. Widget after translating the labels 

== Other ==

* You may use the code any way you wish, with respect to the Wordpress general licensing rules. However I do not guaratee anythig, of course :) 