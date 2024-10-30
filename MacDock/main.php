<?php
/*
Plugin Name: Mac Dock
Plugin URI: http://macphobia.com/
Description: Used to display Mac like Dock at bottom of your website V1.0 <a href="http://macphobia.com/released-macdock-plugin-for-wordpress.macphobia" title="MacDock at macphobia.com">More Informations</a>.
Version: 1.0
Author: MacPhobia
Author URI: http://macphobia.com/
*/

/* Where the Mac Dock thumbs reside: */
$dock_images = (dirname(__FILE__)."/Thumbs");


function macDock_footer(){
	$macDock_thumbs_path =  get_bloginfo('wpurl')."/wp-content/plugins/MacDock/thumbs/";
	$macDock_thumbs_path_for_close_icon =  get_bloginfo('wpurl')."/wp-content/plugins/MacDock/thumbs/close.gif";
	$wp_macDock = get_option("wp_macDock");
	if ( $wp_macDock["wp_dock_close"] == 'yes' ) {
	$macDock_thumbs_path_for_close_icon =  get_bloginfo('wpurl')."/wp-content/plugins/MacDock/thumbs/dot.png";
	}		
	$wp_macDock = get_option("wp_macDock");
	$wp_macDock_no = $wp_macDock["wp_macDock_no"];
	
	if($wp_macDock_no == '3'){
		$thumb_url31 = $wp_macDock["thumb_url31"];
		$thumb_url32 = $wp_macDock["thumb_url32"];
		$thumb_url33 = $wp_macDock["thumb_url33"];
		$wp_thumbs31 = $wp_macDock["wp_thumbs31"];
		$wp_thumbs32 = $wp_macDock["wp_thumbs32"];
		$wp_thumbs33 = $wp_macDock["wp_thumbs33"];
	$footerscript = "
		<br/><br/><br/><br/><br/><br/><br/>
	<div id=\"topbar\">
	<div id=\"dockContainer\">
	<a href=\"\" onClick=\"closebar(); return false\"><img src=\"".$macDock_thumbs_path_for_close_icon."\" border=\"0\" /></a>&nbsp;&nbsp;
	<div><div>
	<div id=\"dock\">
	</div>

	</div>

	</div>

	</div>

	</div>
	<script type=\"text/javascript\" >
	  var dock = new MacStyleDock(
	      document.getElementById('dock'),
	      [
	        {
	          name      : '".$macDock_thumbs_path."".$wp_thumbs31."',
	          extension : '.png',
	          sizes     : [80, 160],
	          onclick   : function(){
	                         window.location = '".$thumb_url31."';
	                      }
	        },

	{
	          name      : '".$macDock_thumbs_path."".$wp_thumbs32."',
	          extension : '.png',
	          sizes     : [80, 160],
	          onclick   : function(){
	                        window.location = '".$thumb_url32."';
	                      }
	        },

	{
	          name      : '".$macDock_thumbs_path."".$wp_thumbs33."',
	          extension : '.png',
	          sizes     : [80, 160],
	          onclick   : function(){
	                         window.location = '".$thumb_url33."';
	                      }
	        },


	      ],
	      80,
	      160,
	      2);
	</script>
	<!-- end MacDock scripts -->\n";
		/* Output $macDockScipt as text for our web pages: */

		}	

	if($wp_macDock_no == '4'){
		$thumb_url41 = $wp_macDock["thumb_url41"];
		$thumb_url42 = $wp_macDock["thumb_url42"];
		$thumb_url43 = $wp_macDock["thumb_url43"];
		$thumb_url44 = $wp_macDock["thumb_url44"];
		$wp_thumbs41 = $wp_macDock["wp_thumbs41"];
		$wp_thumbs42 = $wp_macDock["wp_thumbs42"];
		$wp_thumbs43 = $wp_macDock["wp_thumbs43"];
		$wp_thumbs44 = $wp_macDock["wp_thumbs44"];			
$footerscript = "
	<br/><br/><br/><br/><br/><br/><br/>
<div id=\"topbar\">
<div id=\"dockContainer\">
<a href=\"\" onClick=\"closebar(); return false\"><img src=\"".$macDock_thumbs_path_for_close_icon."\" border=\"0\" /></a>&nbsp;&nbsp;
<div><div>
<div id=\"dock\">
</div>

</div>

</div>

</div>

</div>
<script type=\"text/javascript\" >
  var dock = new MacStyleDock(
      document.getElementById('dock'),
      [
        {
          name      : '".$macDock_thumbs_path."".$wp_thumbs41."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                        window.location = '".$thumb_url41."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs42."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                        window.location = '".$thumb_url42."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs43."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                       window.location = '".$thumb_url43."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs44."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                        window.location = '".$thumb_url44."';
                      }
        },

      ],
      80,
      160,
      2);
</script>
<!-- end MacDock scripts -->\n";
	/* Output $macDockScipt as text for our web pages: */
	
	}

if($wp_macDock_no == '5'){	
	$thumb_url51 = $wp_macDock["thumb_url51"];
	$thumb_url52 = $wp_macDock["thumb_url52"];
	$thumb_url53 = $wp_macDock["thumb_url53"];
	$thumb_url54 = $wp_macDock["thumb_url54"];
	$thumb_url55 = $wp_macDock["thumb_url55"];	
	$wp_thumbs51 = $wp_macDock["wp_thumbs51"];
	$wp_thumbs52 = $wp_macDock["wp_thumbs52"];
	$wp_thumbs53 = $wp_macDock["wp_thumbs53"];
	$wp_thumbs54 = $wp_macDock["wp_thumbs54"];
	$wp_thumbs55 = $wp_macDock["wp_thumbs55"];		
$footerscript = "
	<br/><br/><br/><br/><br/><br/><br/>
<div id=\"topbar\">
<div id=\"dockContainer\">
<a href=\"\" onClick=\"closebar(); return false\"><img src=\"".$macDock_thumbs_path_for_close_icon."\" border=\"0\" /></a>&nbsp;&nbsp;
<div><div>
<div id=\"dock\">
</div>

</div>

</div>

</div>

</div>
<script type=\"text/javascript\" >
  var dock = new MacStyleDock(
      document.getElementById('dock'),
      [
        {
          name      : '".$macDock_thumbs_path."".$wp_thumbs51."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                        window.location = '".$thumb_url51."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs52."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                        window.location = '".$thumb_url52."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs53."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url53."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs54."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                        window.location = '".$thumb_url54."';
                      }
        },
{
          name      : '".$macDock_thumbs_path."".$wp_thumbs55."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url55."';
                      }
        },		

      ],
      80,
      160,
      2);
</script>
<!-- end MacDock scripts -->\n";
	/* Output $macDockScipt as text for our web pages: */
	
	}

if($wp_macDock_no == '6'){
	$thumb_url61 = $wp_macDock["thumb_url61"];
	$thumb_url62 = $wp_macDock["thumb_url62"];
	$thumb_url63 = $wp_macDock["thumb_url63"];
	$thumb_url64 = $wp_macDock["thumb_url64"];
	$thumb_url65 = $wp_macDock["thumb_url65"];
	$thumb_url66 = $wp_macDock["thumb_url66"];	
	$wp_thumbs61 = $wp_macDock["wp_thumbs61"];
	$wp_thumbs62 = $wp_macDock["wp_thumbs62"];
	$wp_thumbs63 = $wp_macDock["wp_thumbs63"];
	$wp_thumbs64 = $wp_macDock["wp_thumbs64"];
	$wp_thumbs65 = $wp_macDock["wp_thumbs65"];	
	$wp_thumbs66 = $wp_macDock["wp_thumbs66"];	
$footerscript = "
	<br/><br/><br/><br/><br/><br/><br/>
<div id=\"topbar\">
<div id=\"dockContainer\">
<a href=\"\" onClick=\"closebar(); return false\"><img src=\"".$macDock_thumbs_path_for_close_icon."\" border=\"0\" /></a>&nbsp;&nbsp;
<div><div>
<div id=\"dock\">
</div>

</div>

</div>

</div>

</div>
<script type=\"text/javascript\" >
  var dock = new MacStyleDock(
      document.getElementById('dock'),
      [
        {
          name      : '".$macDock_thumbs_path."".$wp_thumbs61."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url61."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs62."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url62."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs63."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url63."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs64."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url64."';
                      }
        },
{
          name      : '".$macDock_thumbs_path."".$wp_thumbs65."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url65."';
                      }
        },
{
          name      : '".$macDock_thumbs_path."".$wp_thumbs66."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url66."';
                      }
        },				

      ],
      80,
      160,
      2);
</script>
<!-- end MacDock scripts -->\n";
	/* Output $macDockScipt as text for our web pages: */
	
	}

	if($wp_macDock_no == '7'){
		$thumb_url71 = $wp_macDock["thumb_url71"];
		$thumb_url72 = $wp_macDock["thumb_url72"];
		$thumb_url73 = $wp_macDock["thumb_url73"];
		$thumb_url74 = $wp_macDock["thumb_url74"];
		$thumb_url75 = $wp_macDock["thumb_url75"];
		$thumb_url76 = $wp_macDock["thumb_url76"];
		$thumb_url77 = $wp_macDock["thumb_url77"];	
		$wp_thumbs71 = $wp_macDock["wp_thumbs71"];
		$wp_thumbs72 = $wp_macDock["wp_thumbs72"];
		$wp_thumbs73 = $wp_macDock["wp_thumbs73"];
		$wp_thumbs74 = $wp_macDock["wp_thumbs74"];
		$wp_thumbs75 = $wp_macDock["wp_thumbs75"];	
		$wp_thumbs76 = $wp_macDock["wp_thumbs76"];
		$wp_thumbs77 = $wp_macDock["wp_thumbs77"];	
$footerscript = "
	<br/><br/><br/><br/><br/><br/><br/>
<div id=\"topbar\">
<div id=\"dockContainer\">
<a href=\"\" onClick=\"closebar(); return false\"><img src=\"".$macDock_thumbs_path_for_close_icon."\" border=\"0\" /></a>&nbsp;&nbsp;
<div><div>
<div id=\"dock\">
</div>

</div>

</div>

</div>

</div>
<script type=\"text/javascript\" >
  var dock = new MacStyleDock(
      document.getElementById('dock'),
      [
        {
          name      : '".$macDock_thumbs_path."".$wp_thumbs71."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url71."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs72."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url72."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs73."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url73."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs74."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url74."';
                      }
        },
{
          name      : '".$macDock_thumbs_path."".$wp_thumbs75."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url75."';
                      }
        },
{
          name      : '".$macDock_thumbs_path."".$wp_thumbs76."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url76."';
                      }
        },
{
          name      : '".$macDock_thumbs_path."".$wp_thumbs77."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url77."';
                      }
        },
						

      ],
      80,
      160,
      2);
</script>
<!-- end MacDock scripts -->\n";
	/* Output $macDockScipt as text for our web pages: */
	
	}
if($wp_macDock_no == '8'){
	$thumb_url81 = $wp_macDock["thumb_url81"];
	$thumb_url82 = $wp_macDock["thumb_url82"];
	$thumb_url83 = $wp_macDock["thumb_url83"];
	$thumb_url84 = $wp_macDock["thumb_url84"];
	$thumb_url85 = $wp_macDock["thumb_url85"];
	$thumb_url86 = $wp_macDock["thumb_url86"];
	$thumb_url87 = $wp_macDock["thumb_url87"];	
	$thumb_url88 = $wp_macDock["thumb_url88"];		
	$wp_thumbs81 = $wp_macDock["wp_thumbs81"];
	$wp_thumbs82 = $wp_macDock["wp_thumbs82"];
	$wp_thumbs83 = $wp_macDock["wp_thumbs83"];
	$wp_thumbs84 = $wp_macDock["wp_thumbs84"];
	$wp_thumbs85 = $wp_macDock["wp_thumbs85"];	
	$wp_thumbs86 = $wp_macDock["wp_thumbs86"];
	$wp_thumbs87 = $wp_macDock["wp_thumbs87"];	
	$wp_thumbs88 = $wp_macDock["wp_thumbs88"];		
$footerscript = "
	<br/><br/><br/><br/><br/><br/><br/>
<div id=\"topbar\">
<div id=\"dockContainer\">
<a href=\"\" onClick=\"closebar(); return false\"><img src=\"".$macDock_thumbs_path_for_close_icon."\" border=\"0\" /></a>&nbsp;&nbsp;
<div><div>
<div id=\"dock\">
</div>

</div>

</div>

</div>

</div>
<script type=\"text/javascript\" >
  var dock = new MacStyleDock(
      document.getElementById('dock'),
      [
        {
          name      : '".$macDock_thumbs_path."".$wp_thumbs81."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url81."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs82."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url82."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs83."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url83."';
                      }
        },

{
          name      : '".$macDock_thumbs_path."".$wp_thumbs84."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url84."';
                      }
        },
{
          name      : '".$macDock_thumbs_path."".$wp_thumbs85."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url85."';
                      }
        },
{
          name      : '".$macDock_thumbs_path."".$wp_thumbs86."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url86."';
                      }
        },
{
          name      : '".$macDock_thumbs_path."".$wp_thumbs87."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url87."';
                      }
        },
{
          name      : '".$macDock_thumbs_path."".$wp_thumbs88."',
          extension : '.png',
          sizes     : [80, 160],
          onclick   : function(){
                         window.location = '".$thumb_url88."';
                      }
        },
      ],
      80,
      160,
      2);
</script>
<!-- end MacDock scripts -->\n";
	/* Output $macDockScipt as text for our web pages: */
	
	}	
	echo($footerscript);
}
function macdock_styles() {
    /* The next lines figures out where the javascripts and images and CSS are installed,
    relative to your wordpress server's root: */
    $dock_images = (dirname(__FILE__)."/Thumbs");       
    $macdock_path =  get_bloginfo('wpurl')."/wp-content/plugins/MacDock/";
	$macDock_thumbs_path_transperancy =  get_bloginfo('wpurl')."/wp-content/plugins/MacDock/thumbs/";
	$wp_macDock = get_option("wp_macDock");	
	$wp_dock_trans = $wp_macDock["wp_dock_trans"] ;	
	if($wp_dock_trans == 'yes'){
	$macDock_thumbs_path_transperancy = get_bloginfo('wpurl'); // whatever path expect till the plugin's thumbs folder it wont find image and it will be transparent ( no background image )
	}
    /* The xhtml header code needed for MacDock to work: */
	$macDockScript = "
	<!-- begin MacDock scripts -->
	
<style type=\"text/css\">

#topbar{
position:absolute;
border: 0px solid black;
padding: 2px;
background-color: none;
width: 950px;
visibility: hidden;
z-index: 100;
}

</style>
<script type=\"text/javascript\" src=\"".$macdock_path."js/floating.js\"></script>

<script type=\"text/javascript\" src=\"".$macdock_path."js/MacStyleDock.js\"></script>
<style type=\"text/css\">

    #dockContainer{
      display    : table;
      margin     : 0 auto;
      text-align : center;    /* fixes IE bug */
    }

    #dockContainer > div{
      display : inline-block; /* fixes IE bug */
    }

    #dockContainer > div{
      display : inline;       /* fixes IE bug */
    }

    #dockContainer > div{
      display       : table-cell;
      text-align    : left;
      background    : url('".$macDock_thumbs_path_transperancy."dock-centre-80.png') repeat-x 0 129px;
      border-bottom : 2px solid rgb(220,220,200);
    }

    #dockContainer > div > div{
      background : url('".$macDock_thumbs_path_transperancy."dock-right-80.png') no-repeat right 129px;
    }

    #dockContainer > div > div > div{
      background : url('".$macDock_thumbs_path_transperancy."dock-left-80.png') no-repeat left 129px;
      height     : 176px;
      overflow   : hidden;
      padding    : 0 20px;
    }

  </style>
	<!-- end MacDock scripts -->\n";
	/* Output $macDockScript as text for our web pages: */
	echo($macDockScript);
	
}

/* we want to add the above xhtml to the header of our pages: */
add_action('wp_head', 'macdock_styles');
add_action('wp_footer', 'macDock_footer');
add_action('admin_menu', 'wp_add_macdock_options_page');

function wp_add_macdock_options_page() {
	if (function_exists('add_options_page')) {
		add_options_page( __('MacDock'), __('MacDock'), 8, basename(__FILE__), 'wp_macdock_options_subpanel');
	}
}


function wp_macdock_options_subpanel() {	
	if($_POST["wp_macDock_Submit"]){
		$message = "WordPress MacDock Plugin Settings Updated";	
		$wp_macDock_saved = get_option("wp_macDock");
		$wp_macDock = array (			
			"wp_macDock_no"		=> $_POST['wp_macDock_no_option'],			
			'wp_dock_trans'	=> $_POST['wp_dock_trans_option'],
			'wp_dock_close'		=> $_POST['wp_dock_close_option'],			
			"wp_thumbs31" 	=> $_POST['thumb_name_option31'],
			"thumb_url31"		=> $_POST['thumb_url31'],
			"wp_thumbs32" 	=> $_POST['thumb_name_option32'],
			"thumb_url32"		=> $_POST['thumb_url32'],
			"wp_thumbs33" 	=> $_POST['thumb_name_option33'],
			"thumb_url33"		=> $_POST['thumb_url33'],
			"wp_thumbs41" 	=> $_POST['thumb_name_option41'],
			"thumb_url41"		=> $_POST['thumb_url41'],
			"wp_thumbs42" 	=> $_POST['thumb_name_option42'],
			"thumb_url42"		=> $_POST['thumb_url42'],
			"wp_thumbs43" 	=> $_POST['thumb_name_option43'],
			"thumb_url43"		=> $_POST['thumb_url43'],
			"wp_thumbs44" 	=> $_POST['thumb_name_option44'],
			"thumb_url44"		=> $_POST['thumb_url44'],
			"wp_thumbs51" 	=> $_POST['thumb_name_option51'],
			"thumb_url51"		=> $_POST['thumb_url51'],
			"wp_thumbs52" 	=> $_POST['thumb_name_option52'],
			"thumb_url52"		=> $_POST['thumb_url52'],
			"wp_thumbs53" 	=> $_POST['thumb_name_option53'],
			"thumb_url53"		=> $_POST['thumb_url53'],
			"wp_thumbs54" 	=> $_POST['thumb_name_option54'],
			"thumb_url54"		=> $_POST['thumb_url54'],
			"wp_thumbs55" 	=> $_POST['thumb_name_option55'],
			"thumb_url55"		=> $_POST['thumb_url55'],
			"wp_thumbs61" 	=> $_POST['thumb_name_option61'],
			"thumb_url61"		=> $_POST['thumb_url61'],
			"wp_thumbs62" 	=> $_POST['thumb_name_option62'],
			"thumb_url62"		=> $_POST['thumb_url62'],
			"wp_thumbs63" 	=> $_POST['thumb_name_option63'],
			"thumb_url63"		=> $_POST['thumb_url63'],
			"wp_thumbs64" 	=> $_POST['thumb_name_option64'],
			"thumb_url64"		=> $_POST['thumb_url64'],
			"wp_thumbs65" 	=> $_POST['thumb_name_option65'],
			"thumb_url65"		=> $_POST['thumb_url65'],
			"wp_thumbs66" 	=> $_POST['thumb_name_option66'],
			"thumb_url66"		=> $_POST['thumb_url66'],
			"wp_thumbs71" 	=> $_POST['thumb_name_option71'],
			"thumb_url71"		=> $_POST['thumb_url71'],
			"wp_thumbs72" 	=> $_POST['thumb_name_option72'],
			"thumb_url72"		=> $_POST['thumb_url72'],
			"wp_thumbs73" 	=> $_POST['thumb_name_option73'],
			"thumb_url73"		=> $_POST['thumb_url73'],
			"wp_thumbs74" 	=> $_POST['thumb_name_option74'],
			"thumb_url74"		=> $_POST['thumb_url74'],
			"wp_thumbs75" 	=> $_POST['thumb_name_option75'],
			"thumb_url75"		=> $_POST['thumb_url75'],
			"wp_thumbs76" 	=> $_POST['thumb_name_option76'],
			"thumb_url76"		=> $_POST['thumb_url76'],
			"wp_thumbs77" 	=> $_POST['thumb_name_option77'],
			"thumb_url77"		=> $_POST['thumb_url77'],
			"wp_thumbs81" 	=> $_POST['thumb_name_option81'],
			"thumb_url81"		=> $_POST['thumb_url81'],
			"wp_thumbs82" 	=> $_POST['thumb_name_option82'],
			"thumb_url82"		=> $_POST['thumb_url82'],
			"wp_thumbs83" 	=> $_POST['thumb_name_option83'],
			"thumb_url83"		=> $_POST['thumb_url83'],
			"wp_thumbs84" 	=> $_POST['thumb_name_option84'],
			"thumb_url84"		=> $_POST['thumb_url84'],
			"wp_thumbs85" 	=> $_POST['thumb_name_option85'],
			"thumb_url85"		=> $_POST['thumb_url85'],
			"wp_thumbs86" 	=> $_POST['thumb_name_option86'],
			"thumb_url86"		=> $_POST['thumb_url86'],
			"wp_thumbs87" 	=> $_POST['thumb_name_option87'],
			"thumb_url87"		=> $_POST['thumb_url87'],
			"wp_thumbs88" 	=> $_POST['thumb_name_option88'],
			"thumb_url88"		=> $_POST['thumb_url88']
		);
		
		if ($wp_macDock_saved != $wp_macDock)
			if(!update_option("wp_macDock",$wp_macDock))
				$message = "Update Failed";
		
		echo '<div id="message" class="updated fade"><p>'.$message.'.</p></div>';
	}
	
	$wp_macDock = get_option("wp_macDock"); 
?>
   <div class="wrap">
        <h2 id="write-post"><?php _e("MacDock Options&hellip;",'MacDock');?></h2>
        <p><?php _e("WordPress MacDock Plugin will generate Mac like Dock at the bootom of your WordPress Blog.",'wp_MacDock');?></p>
		<form method="post" name="MacDockForm" action="<?php echo $location ?>">
                <h3><?php _e("Mac Dock Preferences",'wp_MacDock');?></h3>
                <table class="form-table">

					<tr>
                        <th><?php _e("Number of Dock Items to Show"); ?></th>
                        <td>
							<?php $wp_macDock_no = $wp_macDock["wp_macDock_no"]; ?>
							<select name="wp_macDock_no_option" >
								<option value="3" <?php if($wp_macDock_no == '3') echo 'selected' ?> ><?php _e("3"); ?></option>
								<option value="4" <?php if($wp_macDock_no == '4') echo 'selected' ?>><?php _e("4"); ?></option>
								<option value="5" <?php if($wp_macDock_no == '5') echo 'selected' ?>><?php _e("5"); ?></option>
                                <option value="6" <?php if($wp_macDock_no == '6') echo 'selected' ?>><?php _e("6"); ?></option>
                                <option value="7" <?php if($wp_macDock_no == '7') echo 'selected' ?>><?php _e("7"); ?></option>
                                <option value="8" <?php if($wp_macDock_no == '8') echo 'selected'?>><?php _e("8"); ?></option>
        					</select>
						</td>
                    </tr>  
                  	<tr>
						<th><?php _e("Dock Details:");?></th>
						<td>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs31 = $wp_macDock["wp_thumbs31"];	if($wp_macDock_no == '3'){ ?>
							<select name="thumb_name_option31" >
								<option value="Home-icon-" <?php if($wp_thumbs31 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs31 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs31 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs31 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs31 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs31 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs31 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url31" type="text" value="<?php echo $wp_macDock["thumb_url31"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs32 = $wp_macDock["wp_thumbs32"];	if($wp_macDock_no == '3'){ ?>
							<select name="thumb_name_option32" >
								<option value="Home-icon-" <?php if($wp_thumbs32 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs32 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs32 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs32 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs32 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs32 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs32 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url32" type="text" value="<?php echo $wp_macDock["thumb_url32"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs33 = $wp_macDock["wp_thumbs33"];	if($wp_macDock_no == '3'){ ?>
							<select name="thumb_name_option33" >
								<option value="Home-icon-" <?php if($wp_thumbs33 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs33 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs33 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs33 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs33 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs33 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs33 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url33" type="text" value="<?php echo $wp_macDock["thumb_url33"]; ?>"><br/>							
						<?php } ?>	
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs41 = $wp_macDock["wp_thumbs41"];	if($wp_macDock_no == '4'){ ?>
							<select name="thumb_name_option41" >
								<option value="Home-icon-" <?php if($wp_thumbs41 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs41 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs41 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs41 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs41 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs41 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs41 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url41" type="text" value="<?php echo $wp_macDock["thumb_url41"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs42 = $wp_macDock["wp_thumbs42"];	if($wp_macDock_no == '4'){ ?>
							<select name="thumb_name_option42" >
								<option value="Home-icon-" <?php if($wp_thumbs42 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs42 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs42 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs42 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs42 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs42 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs42 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url42" type="text" value="<?php echo $wp_macDock["thumb_url42"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs43 = $wp_macDock["wp_thumbs43"];	if($wp_macDock_no == '4'){ ?>
							<select name="thumb_name_option43" >
								<option value="Home-icon-" <?php if($wp_thumbs43 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs43 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs43 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs43 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs43 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs43 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs43 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url43" type="text" value="<?php echo $wp_macDock["thumb_url43"]; ?>"><br/>							
						<?php } ?>	
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs44 = $wp_macDock["wp_thumbs44"];	if($wp_macDock_no == '4'){ ?>
							<select name="thumb_name_option44" >
								<option value="Home-icon-" <?php if($wp_thumbs44 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs44 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs44 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs44 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs44 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs44 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs44 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url44" type="text" value="<?php echo $wp_macDock["thumb_url44"]; ?>"><br/>							
						<?php } ?>						
											
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs51 = $wp_macDock["wp_thumbs51"];	if($wp_macDock_no == '5'){ ?>
							<select name="thumb_name_option51" >
								<option value="Home-icon-" <?php if($wp_thumbs51 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs51 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs51 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs51 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs51 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs51 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs51 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url51" type="text" value="<?php echo $wp_macDock["thumb_url51"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs52 = $wp_macDock["wp_thumbs52"];	if($wp_macDock_no == '5'){ ?>
							<select name="thumb_name_option52" >
								<option value="Home-icon-" <?php if($wp_thumbs52 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs52 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs52 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs52 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs52 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs52 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs52 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url52" type="text" value="<?php echo $wp_macDock["thumb_url52"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs53 = $wp_macDock["wp_thumbs53"];	if($wp_macDock_no == '5'){ ?>
							<select name="thumb_name_option53" >
								<option value="Home-icon-" <?php if($wp_thumbs53 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs53 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs53 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs53 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs53 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs53 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs53 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url53" type="text" value="<?php echo $wp_macDock["thumb_url53"]; ?>"><br/>							
						<?php } ?>						
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs54 = $wp_macDock["wp_thumbs54"];	if($wp_macDock_no == '5'){ ?>
							<select name="thumb_name_option54" >
								<option value="Home-icon-" <?php if($wp_thumbs54 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs54 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs54 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs54 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs54 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs54 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs54 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url54" type="text" value="<?php echo $wp_macDock["thumb_url54"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs55 = $wp_macDock["wp_thumbs55"];	if($wp_macDock_no == '5'){ ?>
							<select name="thumb_name_option55" >
								<option value="Home-icon-" <?php if($wp_thumbs55 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs55 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs55 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs55 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs55 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs55 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs55 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url55" type="text" value="<?php echo $wp_macDock["thumb_url55"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs61 = $wp_macDock["wp_thumbs61"];	if($wp_macDock_no == '6'){ ?>
							<select name="thumb_name_option61" >
								<option value="Home-icon-" <?php if($wp_thumbs61 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs61 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs61 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs61 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs61 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs61 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs61 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url61" type="text" value="<?php echo $wp_macDock["thumb_url61"]; ?>"><br/>							
						<?php } ?>						
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs62 = $wp_macDock["wp_thumbs62"];	if($wp_macDock_no == '6'){ ?>
							<select name="thumb_name_option62" >
								<option value="Home-icon-" <?php if($wp_thumbs62 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs62 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs62 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs62 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs62 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs62 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs62 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url62" type="text" value="<?php echo $wp_macDock["thumb_url62"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs63 = $wp_macDock["wp_thumbs63"];	if($wp_macDock_no == '6'){ ?>
							<select name="thumb_name_option63" >
								<option value="Home-icon-" <?php if($wp_thumbs63 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs63 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs63 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs63 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs63 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs63 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs63 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url63" type="text" value="<?php echo $wp_macDock["thumb_url63"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs64 = $wp_macDock["wp_thumbs64"];	if($wp_macDock_no == '6'){ ?>
							<select name="thumb_name_option64" >
								<option value="Home-icon-" <?php if($wp_thumbs64 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs64 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs64 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs64 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs64 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>                                
								<option value="archive-icon-" <?php if($wp_thumbs64 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url64" type="text" value="<?php echo $wp_macDock["thumb_url64"]; ?>"><br/>							
						<?php } ?>						
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs65 = $wp_macDock["wp_thumbs65"];	if($wp_macDock_no == '6'){ ?>
							<select name="thumb_name_option65" >
								<option value="Home-icon-" <?php if($wp_thumbs65 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs65 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs65 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs65 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs65 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs65 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>								
								<option value="trash-icon-" <?php if($wp_thumbs65 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url65" type="text" value="<?php echo $wp_macDock["thumb_url65"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs66 = $wp_macDock["wp_thumbs66"];	if($wp_macDock_no == '6'){ ?>
							<select name="thumb_name_option66" >
								<option value="Home-icon-" <?php if($wp_thumbs66 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs66 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs66 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs66 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs66 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs66 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs66 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url66" type="text" value="<?php echo $wp_macDock["thumb_url66"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs71 = $wp_macDock["wp_thumbs71"];	if($wp_macDock_no == '7'){ ?>
							<select name="thumb_name_option71" >
								<option value="Home-icon-" <?php if($wp_thumbs71 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs71 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs71 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs71 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs71 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs71 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs71 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url71" type="text" value="<?php echo $wp_macDock["thumb_url71"]; ?>"><br/>							
						<?php } ?>						
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs72 = $wp_macDock["wp_thumbs72"];	if($wp_macDock_no == '7'){ ?>
							<select name="thumb_name_option72" >
								<option value="Home-icon-" <?php if($wp_thumbs72 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs72 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs72 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs72 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs72 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs72 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs72 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url72" type="text" value="<?php echo $wp_macDock["thumb_url72"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs73 = $wp_macDock["wp_thumbs73"];	if($wp_macDock_no == '7'){ ?>
							<select name="thumb_name_option73" >
								<option value="Home-icon-" <?php if($wp_thumbs73 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs73 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs73 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs73 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs73 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs73 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs73 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url73" type="text" value="<?php echo $wp_macDock["thumb_url73"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs74 = $wp_macDock["wp_thumbs74"];	if($wp_macDock_no == '7'){ ?>
							<select name="thumb_name_option74" >
								<option value="Home-icon-" <?php if($wp_thumbs74 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs74 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs74 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs74 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs74 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs74 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs74 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url74" type="text" value="<?php echo $wp_macDock["thumb_url74"]; ?>"><br/>							
						<?php } ?>						
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs75 = $wp_macDock["wp_thumbs75"];	if($wp_macDock_no == '7'){ ?>
							<select name="thumb_name_option75" >
								<option value="Home-icon-" <?php if($wp_thumbs75 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs75 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs75 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs75 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs75 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs75 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs75 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url75" type="text" value="<?php echo $wp_macDock["thumb_url75"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs76 = $wp_macDock["wp_thumbs76"];	if($wp_macDock_no == '7'){ ?>
							<select name="thumb_name_option76" >
								<option value="Home-icon-" <?php if($wp_thumbs76 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs76 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs76 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs76 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs76 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs76 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs76 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url76" type="text" value="<?php echo $wp_macDock["thumb_url76"]; ?>"><br/>							
						<?php } ?>
						
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs77 = $wp_macDock["wp_thumbs77"];	if($wp_macDock_no == '7'){ ?>
							<select name="thumb_name_option77" >
								<option value="Home-icon-" <?php if($wp_thumbs77 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs77 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs77 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs77 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs77 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs77 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs77 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url77" type="text" value="<?php echo $wp_macDock["thumb_url77"]; ?>"><br/>							
						<?php } ?>						
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs81 = $wp_macDock["wp_thumbs81"];	if($wp_macDock_no == '8'){ ?>
							<select name="thumb_name_option81" >
								<option value="Home-icon-" <?php if($wp_thumbs81 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs81 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs81 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs81 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs81 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs81 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs81 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url81" type="text" value="<?php echo $wp_macDock["thumb_url81"]; ?>"><br/>							
						<?php } ?>						
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs82 = $wp_macDock["wp_thumbs82"];	if($wp_macDock_no == '8'){ ?>
							<select name="thumb_name_option82" >
								<option value="Home-icon-" <?php if($wp_thumbs82 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs82 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs82 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs82 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs82 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs82 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs82 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url82" type="text" value="<?php echo $wp_macDock["thumb_url82"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs83 = $wp_macDock["wp_thumbs83"];	if($wp_macDock_no == '8'){ ?>
							<select name="thumb_name_option83" >
								<option value="Home-icon-" <?php if($wp_thumbs83 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs83 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs83 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs83 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs83 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs83 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs83 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url83" type="text" value="<?php echo $wp_macDock["thumb_url83"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs84 = $wp_macDock["wp_thumbs84"];	if($wp_macDock_no == '8'){ ?>
							<select name="thumb_name_option84" >
								<option value="Home-icon-" <?php if($wp_thumbs84 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs84 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs84 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs84 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs84 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs84 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs84 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url84" type="text" value="<?php echo $wp_macDock["thumb_url84"]; ?>"><br/>							
						<?php } ?>						
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs85 = $wp_macDock["wp_thumbs85"];	if($wp_macDock_no == '8'){ ?>
							<select name="thumb_name_option85" >
								<option value="Home-icon-" <?php if($wp_thumbs85 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs85 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs85 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs85 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs85 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs85 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs85 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url85" type="text" value="<?php echo $wp_macDock["thumb_url85"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs86 = $wp_macDock["wp_thumbs86"];	if($wp_macDock_no == '8'){ ?>
							<select name="thumb_name_option86" >
								<option value="Home-icon-" <?php if($wp_thumbs86 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs86 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs86 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs86 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs86 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs86 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs86 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url86" type="text" value="<?php echo $wp_macDock["thumb_url86"]; ?>"><br/>							
						<?php } ?>
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs87 = $wp_macDock["wp_thumbs87"];	if($wp_macDock_no == '8'){ ?>
							<select name="thumb_name_option87" >
								<option value="Home-icon-" <?php if($wp_thumbs87 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs87 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs87 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs87 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs87 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs87 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs87 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url87" type="text" value="<?php echo $wp_macDock["thumb_url87"]; ?>"><br/>							
						<?php } ?>						
						
						<?php 	 $wp_macDock_no = $wp_macDock["wp_macDock_no"]; $wp_thumbs88 = $wp_macDock["wp_thumbs88"];	if($wp_macDock_no == '8'){ ?>
							<select name="thumb_name_option88" >
								<option value="Home-icon-" <?php if($wp_thumbs88 == 'Home-icon-') echo 'selected' ?> ><?php _e("Home"); ?></option>
								<option value="mac-icon-" <?php if($wp_thumbs88 == 'mac-icon-') echo 'selected' ?>><?php _e("About"); ?></option>
								<option value="mail-icon-" <?php if($wp_thumbs88 == 'mail-icon-') echo 'selected' ?>><?php _e("Contact"); ?></option>
                                <option value="feed-icon-" <?php if($wp_thumbs88 == 'feed-icon-') echo 'selected' ?>><?php _e("Feed"); ?></option>
                                <option value="techonorati-icon-" <?php if($wp_thumbs88 == 'techonorati-icon-') echo 'selected' ?>><?php _e("Bookmark"); ?></option>
                                <option value="archive-icon-" <?php if($wp_thumbs88 == 'archive-icon-') echo 'selected'?>><?php _e("Archives"); ?></option>
								<option value="trash-icon-" <?php if($wp_thumbs88 == 'trash-icon-') echo 'selected'?>><?php _e("Feedback"); ?></option>
        					</select>
							URL to Assign to this Thumb ( Example : http://macphobia.com)   <input name="thumb_url88" type="text" value="<?php echo $wp_macDock["thumb_url88"]; ?>"><br/>							
						<?php } ?>						
											
						</td>
					</tr>
					<tr>
						<th><?php _e("Other Setting:",'wp_MacDock');?></th>
						<td>
						<label>
						<?php
							if ( $wp_macDock["wp_dock_trans"] == 'yes' ) {
								echo '<input name="wp_dock_trans_option" type="checkbox" value="yes" checked>';
							} else {
								echo '<input name="wp_dock_trans_option" type="checkbox" value="yes">';
							}
						?>
						<?php _e("Transparent Dock Base ");?>
						</label>
						<br />
						<label>
						<?php
							if ( $wp_macDock["wp_dock_close"] == 'yes' ) {
								echo '<input name="wp_dock_close_option" type="checkbox" value="yes" checked>';
							} else {
								echo '<input name="wp_dock_close_option" type="checkbox" value="yes">';
							}
						?>
						<?php _e("Do not display Close icon--  WARNING : User will always see the Dock ( which may be irritating to them sometimes )");?>
						</label>										
						<br />
						</td>
					</tr>
				</table>
            
           <p class="submit"><input type="submit" value="<?php _e("Update Preferences &raquo;",'MacDock');?>" name="wp_macDock_Submit" /></p>
        </form>
    </div>
<?php }?>
