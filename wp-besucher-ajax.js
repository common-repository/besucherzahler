var xmlhttp;
if (window.XMLHttpRequest)
  xmlhttp=new XMLHttpRequest();
else
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

function besucher_show (stat, plugin_url, blog_url) {

  document.getElementById("besucher_stats_title").innerHTML = '<img src="'+plugin_url+'" title="Loading Stats" alt="Loading Stats" border="0">';
  xmlhttp.onreadystatechange=besucher_change_stat;
  xmlhttp.open("GET",blog_url+"/wp-admin/admin-ajax.php?action=besucherstats&reqstats="+stat,true);
  xmlhttp.send(); 
}

function besucher_change_stat () {

  if (xmlhttp.readyState==4 && xmlhttp.status==200) {

     var rt = xmlhttp.responseText;
     var besucherdata = rt.split('~');
     document.getElementById("besucher_stats_title").innerHTML = besucherdata[0];
     document.getElementById("besucher_lds").innerHTML = besucherdata[1];
     document.getElementById("besucher_lws").innerHTML = besucherdata[2];
     document.getElementById("besucher_lms").innerHTML = besucherdata[3];

  }
}