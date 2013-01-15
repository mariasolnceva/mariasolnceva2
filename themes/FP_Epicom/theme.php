<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2012 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Name: FP Epicom Theme
| Based on a Design from http://www.templatemo.com
| Filename: theme.php
| Author: Fangree Productions
| Version: v1.00
| Developers: Fangree_Craig
| Site: http://www.fangree.com
+--------------------------------------------------------+
| CONTRABUTIONS: News & Forum icons from Stylo by Falcon
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { header("Location: ../../index.php"); exit; }
require_once INCLUDES."theme_functions_include.php";

define("THEME_WIDTH", "1000px");
define("THEME_BULLET", "<img src='".THEME."images/bullet.png' alt='' style='vertical-align:middle; border: 0px;'/>");
set_image("author",  THEME."images/author.png");
set_image("date",  THEME."images/date.png");
set_image("reads",  THEME."images/reads.png");
set_image("comments",  THEME."images/comments.png");
set_image("readmore",  THEME."images/readmore.png");
set_image("edit",  THEME."images/edit.png");
set_image("print",  THEME."images/printer.png");
set_image("sticky",  THEME."images/sticky.png");
set_image("new",  THEME."images/new.png");
set_image("facebook",  THEME."images/facebook.png");
set_image("google+",  THEME."images/google.png");
set_image("twitter",  THEME."images/twitter.png");
function render_page($license=false) {
	
	global $settings, $locale, $main_style, $mysql_queries_time, $aidlink;
	
	echo"<div id='header_wrapper'>\n
  
  <div id='header'>\n
    
   	<div id='site_logo'>\n<div style='margin-top:30px;margin-bottom:20px;'>".showbanners()."</div>\n</div>\n";
        
		// Sub Menu Links
		echo"<div id='menu'>\n
      		<div id='menu_left'>\n</div>\n
            <ul>
                  <li><a href='".BASEDIR."index.php' class='current'>Home</a></li>
                  <li><a href='".BASEDIR."articles.php'>Articles</a></li>
                  <li><a href='".BASEDIR."downloads.php'>Downloads</a></li>
                  <li><a href='".BASEDIR."faq.php'>FAQ</a></li>
                  <li><a href='".BASEDIR."forum/index.php' class='last'>Forum</a></li>
            </ul>    	
		</div>\n <!-- end of menu -->
    
    </div>\n  <!-- end of header -->
</div>\n <!-- end of header wrapper -->";
	
	echo "<div class='container clearfix center $main_style' style='width:".THEME_WIDTH.";'>\n";
	if (LEFT) { echo "<div class='side-border-left'>".LEFT."</div>\n"; }
	if (RIGHT) { echo "<div class='side-border-right'>".RIGHT."</div>\n"; }
	echo "<div class='main-content'><div class='main-container'>".U_CENTER.CONTENT.L_CENTER."</div></div>\n";
	echo "</div>\n";
		
	echo "<div class='clear'></div>\n
	<div id='footer_wrapper'>\n";

	 // Footer Links Begin 
	echo"<div id='footer'>\n
    	
        <div class='section_w180'>\n
        	<div class='footerb'>Services</div>\n
            <div class='section_w180_content'>\n 
            	<ul class='footer_menu_list'>
                    <li><a href='#'>Lorem ipsum dolor</a></li>
                    <li><a href='#'>Cum sociis</a></li>
                    <li><a href='#'>Donec quam</a></li>
                    <li><a href='#'>Nulla consequat</a></li>
                               
                </ul>
			</div>\n
        </div>\n
        
        <div class='section_w180'>\n
        	<div class='footerb'>About</div>\n
            <div class='section_w180_content'>\n
                <ul class='footer_menu_list'>
                    <li><a href='#'>Nullam quis</a></li>
                    <li><a href='#'>Sed consequat</a></li>
                    <li><a href='#'>Cras dapibus</a></li> 
                    <li><a href='#'>Lorem ipsum dolor</a></li>
                                 
                </ul>
            </div>\n
        </div>\n
                
        <div class='section_w180'>\n
        	<div class='footerb'>Cool links</div>\n
            <div class='section_w180_content'>\n
                <ul class='footer_menu_list'>
                    <li><a href='#'>Aenean vulputate</a></li>
                    <li><a href='#'>Etiam ultricies</a></li>
                    <li><a href='#'>Nullam quis</a></li>
                    <li><a href='#'>Sed consequat</a></li>
                          
                </ul>
			</div>\n
        </div>\n
        
        <div class='section_w180'>\n
	        <div class='footerb'>Contact</div>\n
            
            <div class='section_w180_content'>\n
            
                <ul class='footer_menu_list'>
                    <li><a href='#'>Donec quam</a></li>
                    <li><a href='#'>Nulla consequat</a></li>
                    <li><a href='#'>In enim justo</a></li>    
                    <li><a href='#'>Aenean vulputate</a></li>
                            
                </ul>
			</div>\n
        </div>\n
        
        <div class='section_w180'>\n
			<div class='footerb'>Partners</div>\n
            <div class='section_w180_content'>\n     
                <ul class='footer_menu_list'>
                    <li><a href='http://www.templatemo.com' target='_parent'>CSS Templates</a></li>
                    <li><a href='http://www.flashmo.com' target='_parent'>Flash Websites</a></li>
                    <li><a href='http://www.layermo.com' target='_parent'>WordPress Themes</a></li>
                    <li><a href='http://www.webdesignmo.com' target='_parent'>Web Design Tips</a></li>

                </ul>
			</div>\n
        </div>\n";
        // Footer Links End
		
		// COPYRIGHT NOTICES Removal of copyright notices is strictly prohibited without written permission from the original author(s)
       echo" <div class='margin_bottom_20'>\n</div>\n<span id='footer-copyright'>".(!$license ? showcopyright()."<br />" : "")."  ".stripslashes($settings['footer'])." | FP Epicom Theme by  <a href='http://www.fangree.com' target='_blank' title='Fangree Productions'>Fangree Productions</a> Based on a design from <a href='http://www.templatemo.com' target='_blank'>Free CSS Templates</a></span>
        <div class='cleaner'></div>\n
    </div>\n <!-- end of footer -->
</div>\n <!-- end of footer -->";
}

//Render Comments Function
function render_comments($c_data, $c_info){
	global $locale, $settings;
   opentable($locale['c100']);
	if (!empty($c_data)){
		echo "<div class='comments floatfix'>\n";

	if ($c_info['admin_link'] !== false) {
		echo "<div class='floatfix'>\n";
		echo "<div class='comment_admin'>".$c_info['admin_link']."</div>\n";
		echo "</div>\n";
	}

		foreach($c_data as $data) {

			$comm_count = "<a href='".FUSION_REQUEST."#c".$data['comment_id']."' id='c".$data['comment_id']."' name='c".$data['comment_id']."'>#".$data['i']."</a>";
			
			echo "<div class='comment-main spacer'>\n";
			echo "<div class='tbl2 clearfix floatfix'>\n";
	if ($settings['comments_avatar'] == "1") { echo "<span class='comment-avatar'>".$data['user_avatar']."</span>\n"; }
	        echo "<span style='float:right' class='comment_actions'>".$comm_count."\n</span>\n";
			echo "<span class='comment-name small'>".$data['comment_name']."</span>\n";
			echo "<span class='small'>".$data['comment_datestamp']."</span> \n";
	if ($data['edit_dell'] !== false) { echo "<span class='comment_actions'>".$data['edit_dell']."\n</span>\n"; }
			echo "\n<div class='tbl2 comment_message'>".$data['comment_message']."</div>\n";
			echo "</div></div>\n";
	}

		echo "</div>\n";

	} else {
	    echo "<div class='nocomments-message spacer'>".$locale['c101']."</div>\n";
	}
closetable();
}

//Render News Function
function render_news($subject, $news, $info) {
    global $locale, $settings, $aidlink;
	$parameter= $settings['siteurl']."news.php?readmore=".$info['news_id'];
	$breaking_news = 3600; //Breaking News Time (1 Hour/60 Mins/3600 Seconds)
      opentable($subject.(time()-$info['news_date'] < $breaking_news ? " <span class='breaking-news'>Breaking News</span>" : 
	($info['news_sticky'] == 1 ? "<img class='sticky-news' src='".get_image("sticky")."' title='Sticky News Item' alt='Sticky News Item'/>" : "")));
    echo" <div class='news-info'><img src='".get_image("author")."' alt='".$locale['global_070']." ".$info['user_name']."'  title='".$locale['global_070'].$info['user_name']."' class='news-icons' /> ".profile_link($info['user_id'], $info['user_name'], $info['user_status']);
          echo " <img src='".get_image("date")."' alt='".$locale['global_049']."".$locale['global_071']." ".showdate("%d-%m-%Y %H:%M", $info['news_date'])."' title='".$locale['global_049']." ".$locale['global_071'].showdate("%d-%m-%Y %H:%M", $info['news_date'])."' class='news-icons' /> ".showdate("%d-%m-%Y %H:%M", $info['news_date'])."\n";
		   echo " <img src='".get_image("reads")."' alt='".$info['news_reads']." ".$locale['global_074']."' title='".$info['news_reads']." ".$locale['global_074']."' class='news-icons' /> ".$info['news_reads']." ".$locale['global_074']."";
             if ($info['news_allow_comments'] && $settings['comments_enabled'] == "1") { echo "&nbsp; <img src='".get_image("comments")."' alt='".$info['news_comments'].($info['news_comments'] == 1 ? $locale['global_073b'] : $locale['global_073'])."'  title='".$info['news_comments'].($info['news_comments'] == 1 ? $locale['global_073b'] : $locale['global_073'])."' class='news-icons' /> <a href='".BASEDIR."news.php?readmore=".$info['news_id']."#comments'>".$info['news_comments'].($info['news_comments'] == 1 ? $locale['global_073b'] : $locale['global_073'])."</a>\n"; }
              echo "<div class='float-right clearfix'>\n";
	            echo "<a href='".BASEDIR."print.php?type=N&amp;item_id=".$info['news_id']."'><img class='news-iconsb' src='".get_image("print")."' title='Print' alt='printer' /></a>\n";
	            if (iADMIN && checkrights("N")) {
                echo " <a href='".ADMIN."news.php".$aidlink."&amp;action=edit&amp;news_id=".$info['news_id']."'><img class='news-iconsb' src='".get_image("edit")."' alt='".$locale['global_076']."' title='".$locale['global_076']."' border='0' /></a>\n";
	            }
	           echo "</div>\n";
	          echo"</div>\n";
             echo "<div class='news-body floatfix'>".$info['cat_image'].$news."</div>\n";



            if ($info['news_ext'] == "y") {  echo" <div class='news-infob'>";
			echo" <span class='button_01 float-right'><a href='".BASEDIR."news.php?readmore=".$info['news_id']."'>Read More</a></span>";
    echo"</div>\n";
   }
 

 closetable();

}

//Render Articles Function
function render_article($subject, $article, $info) {
    global $locale, $settings, $aidlink;
    opentable($subject);
    echo" <div class='news-info'><img src='".get_image("author")."' alt='".$locale['global_070']." ".$info['user_name']."'  title='".$locale['global_070'].$info['user_name']."' class='news-icons' /> ".profile_link($info['user_id'], $info['user_name'], $info['user_status']);
          echo " <img src='".get_image("date")."'alt='".$locale['global_049']."".$locale['global_071']." ".showdate("%d-%m-%Y %H:%M", $info['article_date'])."' title='".$locale['global_049']." ".$locale['global_071'].showdate("%d-%m-%Y %H:%M", $info['article_date'])."' class='news-icons' /> ".showdate("%d-%m-%Y %H:%M", $info['article_date'])."\n";
		   echo " <img src='".get_image("reads")."' alt='".$info['article_reads']." ".$locale['global_074']."' title='".$info['article_reads']." ".$locale['global_074']."' class='news-icons' /> ".$info['article_reads']." ".$locale['global_074']."";
             if ($info['article_allow_comments'] && $settings['comments_enabled'] == "1") { echo "&nbsp; <img src='".get_image("comments")."' alt='".$info['article_comments'].($info['article_comments'] == 1 ? $locale['global_073b'] : $locale['global_073'])."'  title='".$info['article_comments'].($info['article_comments'] == 1 ? $locale['global_073b'] : $locale['global_073'])."' class='news-icons' /> <a href='".BASEDIR."articles.php?article_id=".$info['article_id']."#comments'>".$info['article_comments'].($info['article_comments'] == 1 ? $locale[	'global_073b'] : $locale['global_073'])."</a>\n"; }
              echo "<div class='float-right clearfix'>\n";
	            echo "<a href='".BASEDIR."print.php?type=A&amp;item_id=".$info['article_id']."'><img class='news-iconsb' src='".get_image("print")."' title='Print' alt='printer' /></a>\n";
	            if (iADMIN && checkrights("A")) {
	           echo "<a href='".ADMIN."articles.php".$aidlink."&amp;action=edit&amp;article_id=".$info['article_id']."'><img class='news-iconsb' src='".get_image("edit")."' alt='".$locale['global_076']."' title='".$locale['global_076']."' border='0' /></a>\n";
               }
	           echo "</div>\n";
	          echo"</div>\n";
             echo "<div class='news-body floatfix'>".($info['article_breaks'] == "y" ? nl2br($article) : $article)."</div>\n";
          echo" <div class='news-infob'>";
   echo"</div>\n";
    closetable();

}

// opentable Function 
function opentable($title) {  
echo "<div class='cap-main'>$title</div>\n";
echo "<div class='main-border'>\n";
}

// closetable Function
function closetable() { echo "</div>\n"; }

// openside Function 
function openside($title, $collapse = false, $state = "on") {
global $panel_collapse; $panel_collapse = $collapse;

echo "<div class='scap-main'>";
if ($collapse == true) {
$boxname = str_replace(" ", "", $title);
echo "<div class='float-right;'>".panelbutton($state,$boxname)."</div>";
}
echo $title."</div>\n<div class='side-body floatfix'>\n";
if ($collapse == true) { echo panelstate($state, $boxname); }
}

// closeside Function
function closeside($collapse = false) {
global $panel_collapse;
if ($panel_collapse == true) { echo "</div>\n"; }
echo "</div>\n\n";

}
?>