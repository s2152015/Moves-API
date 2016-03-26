<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title>Watania for Trading &amp; Contracting - Mohamed Khedr &amp; Partners</title>

<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<meta property="og:title" content=""/>
<?php 
echo $layout->meta();
echo $html->css(array(
				'default',
				//'stylesd787.css?layout=4',
				//'datepicker.css',
				//'sw_treemenu_cssd787.css?layout=4',
				'universal_script_css.css',

'new/lightbox',
            'new/jquery.lightbox-0.5'

			));
echo $html->script(array(
				'jquery',
				'jquery-1.3.1.min','elwatania','new/jquery.lightbox-0.5.min'
				
            ));

?>
<script type="text/javascript">

$(function() {

$('#gallerys a').lightBox();

});

</script>



<!-- new-->

<script type="text/javascript">
$(document).ready(function()
{


slideShow();

	//slides the element with class "menu_body" when paragraph with class "menu_head" is clicked 
	$("#firstpane p.menu_head").click(function()
    {
		$(this).css({backgroundImage:"url(down.png)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
       	$(this).siblings().css({backgroundImage:"url(right.png)"});
	});
	//slides the element with class "menu_body" when mouse is over the paragraph
	$("#secondpane p.menu_head").mouseover(function()
    {
	     $(this).css({backgroundImage:"url(down.png)"}).next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
         $(this).siblings().css({backgroundImage:"url(right.png)"});
	});
});
</script>





</head>


	
<body  bgcolor="#ffffff" marginheight="0" marginwidth="0" topmargin="0" leftmargin="0" class=""  id="swBody">

<div id="swSiteDiv" align="center"><div style="width: 770px;"  id="swPageDiv">
<table border="0" cellpadding="0" cellspacing="0" width="770" height="130" bgcolor="">
<tr>



<td valign="top"><?php echo $html->image('/img/menutree_gfx6-1603.gif',array('width'=>'770','height'=>'130','border'=>'0','usemap'=>'#map6','alt'=>'')); ?>




</td>






</tr>      
    </table>
 
	    <div  align="left" id="swContentDiv"><div style="text-align: left;"><table width="770" border="0" cellspacing="0" cellpadding="0" > 
   	 		<tr> 
      		<td valign="top" style="width:145px;"  height="100%">
      		
      		
      		<div id="swLeftmenuDiv">
			<div id="swMenuTreeDiv">
			<!--menu-->
			<div id="sidebar">
		<div id="menu">
<?php //echo $this->Layout->menu('main', array('dropdown' => true, 'tagAttributes' => array('class' => 'menu_head_Link')));
$arr= Configure::read('Config.navigation_map');
 ?>

<div class="menu_list" id="secondpane"> <!--Code for menu starts here-->
                 <?php 
                 $links= $this->requestAction('links/get_menus/3');

foreach($links as $link)
{
    ?>
        <?php if(empty($link['children'])){
if (strstr($link['Link']['link'], 'controller:')) {
                $link['Link']['link'] = $this->Layout->linkStringToArray($link['Link']['link']);
            }
?>

<a href="<?php echo $this->Html->url($link['Link']['link'], true) ;  ?>" class="menu_head_Link" ><?php echo $link['Link']['title'];  ?></a>
                    <?php
                    }
                    else {

                     ?>

<p class="menu_head"> <?php echo $link['Link']['title'];  ?></p>
		<div class="menu_body">
		
                    
                        <?php foreach($link['children'] as $sublink)
{
if (strstr($sublink['Link']['link'], 'controller:')) {
                $sublink['Link']['link'] = $this->Layout->linkStringToArray($sublink['Link']['link']);
            }

?>
                            <a href="<?php echo  $this->Html->url($sublink['Link']['link'],true);  ?>"><?php echo $sublink['Link']['title'];  ?></a>
                            <?php } ?>
                       </div>           
                    <?php  } ?>
                
    <?php
}
                 ?>


</div>























			
		</div>
		
		
		
		
		</div>

			
			
			
			<!--menu-->





			</div>
<?php echo $html->image('/img/1x1.gif',array('width'=>'145','height'=>'1','alt'=>'')); ?>




</div>


</td>
<td width="100%" valign="top" align="left"><div Class="swMainContent">
<table width="455" border=0 cellpadding=0 cellspacing=0><tr>
<td height="3">
<!-- start page-navigator -->
<?php if ($this->here <> "/elwatania/") { ?>
<span class="page-navigator">

<?php 
//print_r($arr);
$i=0;
foreach ($arr as $v)
{
if($i<>0) echo '<span >&raquo;&nbsp;</span>';

if($i<count($arr)-1)echo "<a href='".$this->Html->url($v['url'], true)."' id='swNavigation110223'> ". $v['name'] . " </a>";
else echo "<b> ". $v['name'] . " </b>";
$i++;
}
?>
<?php //echo $this->Html->url($get_company_profile_url, true); ?>
<!--
<a href=index.html >Watania</A> 
<span >&raquo;&nbsp;</span><a href=# id='swNavigation110223'>Sub Link</A> 
<span >&raquo;&nbsp;</span><b>page Name</b>
-->
</span>

<?php } ?>
<!-- end page-navigator -->

 <?php  if ($this->here == "/elwatania/" || $this->here == "/") {
echo $this->Layout->sessionFlash();
echo $this->element('slider_homepage'); } else
{
 
                    echo $this->Layout->sessionFlash();
                    echo $content_for_layout;
                    
}
?>
</td></tr></table> 

<table border="0" cellpadding="0" cellspacing="0">
  <tr> 
<td width="455" valign="top" >
<?php if ($this->here == "/elwatania/" || $this->here == "/") { echo $this->element('blocks_homepage'); } ?>

</td>
	
</tr></table>
</div>
</td></tr></table></div>
</div>
</div>
</div>
<div id="swTop"><div>

<div id="swSelector">

<?php echo $html->image('/img/selector_fr.jpg',array('border'=>'0','usemap'=>'#selector'));
$get_company_profile_url = $this->requestAction(array('controller' => 'nodes', 'action' => 'get_company_profile'));
 ?>

<map name="selector" id="selector">
  <area shape="rect" coords="0,0,125,80" href="<?php echo $this->Html->url($get_company_profile_url, true); ?>" />
  <area shape="rect" coords="0,100,125,180" href="#" />
  <area shape="rect" coords="0,199,125,279" href="#" />
</map>



</div>

<div id="swParent" style="display: none"></div>

</div>


<?php echo $html->image('/img/1x1.gif',array('width'=>'1','height'=>'1','style'=>'display:none','name'=>'userlist')); ?>

</body>
</html>
