<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('JSLC creative'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

	//	echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
<style TYPE="text/css">
    
img {
    border-style:none;
}    
    
body{
    font-size:12px;
    
}
table.logo{
    float:left;
}
table.mainMenu {
    float:left;
    margin-top:40px;
    margin-left:10px;
    width:825px;
    background-image:url("/img/menuline.png");
}
table.mainMenu td{
    text-align:center;
    width:auto;
    font-size:1.2em;
    color:white;
    font-weight:bold;
    padding-left:10px;
    padding-right:10px;
    background-image:url("/img/menu-off.png");
    
    
}
table.mainMenu td.blank{
    width:350px;
    
}
div#business{
        border:2px solid #ddd;
        padding-top:10px;
        padding-bottom:10px;
        margin-top:10px;
        width:940px;


}
div.businessImg{
    float:left;
    padding-left:10px;
}
div.businessContents{
    float:left;
    padding-left:10px;
}

div.contact{
    text-align:center;
    font-size:2em;
}
div.profile{
    padding-left:15px;
    padding-top:10px;
    border:2px solid #ddd;
    width:926px;
}

table.mainMenu a{
    color:white;
    text-decoration:none;
}
table.mainMenu a:hover{
    color:yellow;
    
}
div#content{
    width:946px;
}
.clearfix {zoom:1;}
.clearfix:after{
    content: ""; 
    display: block; 
    clear: both;}

</style>
</head>
<body>
	<div >
		<div >
			<h1><?php 
//echo $this->Html->link(__('CakePHP: the rapid development php framework', true), 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">
			<!--
			<?php echo $this->Session->flash(); ?>
			-->

		
		<div class="clearfix">
                    <table class="logo">
                        <tr>
                            <td><a href="/"><img src="/img/logo.png"></a></td>
                        </tr>
                     </table>   
                    
                    
                    <table  class="mainMenu">
                        <tr>
                            <td><a href="/" target="_self">Main</a></td>
                            <td><a href="/Abouts" target="_self">About Us</a></td>
                            <td><a href="/Business" target="_self">Business</a></td>
                            <td><a href="/Contact" target="_self">Contact Us</a></td>
                            <td class="blank"></td>
                        </tr>
                    </table>    
                    
                    
                </div>
            
                <div>
            	    <?php echo $content_for_layout; ?>
                </div>
            
               </div>
            
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
