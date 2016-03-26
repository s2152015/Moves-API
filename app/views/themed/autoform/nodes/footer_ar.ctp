 <div id="footer_top_shadow"></div>
        <div id="footer_wrapper">
            <div id="footer">
            <div class="col4">
  		        <div class="widget_footer">
                    <h3>
                        MAIN MENU
                    </h3>
                    <div class="hr"></div>
                    <div class="widget_footer_content">
                    <?php echo $this->Menus->menu('footer_main_menu', array('dropdown' => false)); ?>

		            </div>
                </div>
            </div>
            <div class="col4">
                <div class="widget_footer">
                    <h3>
                        FEATURED SERVICE
                    </h3>
                    <div class="hr"></div>
                    <div class="widget_footer_content">
                    <?php echo $this->Menus->menu('footer_featured_service', array('dropdown' => false)); ?>
                       
                    </div>
                </div>
            </div>
            <div class="col4">
                <div class="widget_footer">
                    <h3>
                        Our Network
                    </h3>
                    <div class="hr"></div>
                    <div class="widget_footer_content">
                        <div class="menu-footer-menu-container">
                            <ul id="menu-footer-menu" class="menu">
                            <li id="menu-item-231" class="menu-item menu-item-type-taxonomy menu-item-231">
                                    <a href="/page/our-networks">

									<?php echo $this->Html->image('/img/1381161516_flag_canada.png', array("style" => "vertical-align:middle; margin-right:10px;")); ?>

                                        Canada  </a>
                                </li>
                                <li id="menu-item-231" class="menu-item menu-item-type-taxonomy menu-item-231">
                                    <a href="/page/our-networks">

									<?php echo $this->Html->image('/img/1381161497_flag_usa.png', array("style" => "vertical-align:middle; margin-right:10px;")); ?>

									USA  </a>
                                </li><li id="menu-item-236" class="menu-item menu-item-type-taxonomy menu-item-236">
                                    <a href="/page/our-networks">

									<?php echo $this->Html->image('/img/1376279730_flag_panama.png', array("style" => "vertical-align:middle; margin-right:10px;")); ?>

			PANAMA </a>
                                </li> <li id="menu-item-232" class="menu-item menu-item-type-post_type menu-item-232">
                                    <a href="/page/our-networks">

									<?php echo $this->Html->image('/img/1376279883_flag_united_arab_emirates.png', array("style" => "vertical-align:middle; margin-right:10px;")); ?>
			UAE </a>
                                </li>



                                <li id="menu-item-232" class="menu-item menu-item-type-post_type menu-item-232">
                                    <a href="/page/our-networks">
									<?php echo $this->Html->image('/img/1376279972_flag_saudi_arabia.png', array("style" => "vertical-align:middle; margin-right:10px;")); ?>
			Saudi Arabia </a>
                                </li>
                                <li id="menu-item-232" class="menu-item menu-item-type-post_type menu-item-232">
                                    <a href="/page/our-networks">
									<?php echo $this->Html->image('/img/1376280005_flag_china.png', array("style" => "vertical-align:middle; margin-right:10px;")); ?>
			CHINA </a>
                                </li><li id="menu-item-231" class="menu-item menu-item-type-taxonomy menu-item-231">
                                    <a href="/page/our-networks">

									<?php echo $this->Html->image('/img/1376280015_flag_oman.png', array("style" => "vertical-align:middle; margin-right:10px;")); ?>

									OMAN </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col4">
                <div class="widget_footer">
                    <h3>
                        Contact Form
                    </h3>
                    <div class="hr"></div>
                    <div class="widget_footer_content">
    			        <form action="#" id="widget_contact" method="post">
    				        <p><input type="text" name="fc_name" id="fc_name" /><label for="fc_name">Name*</label></p>
    				        <p><input type="text" name="fc_email" id="fc_email" /><label for="fc_name">E-Mail*</label></p>
    				        <p><textarea cols="10" id="fc_text" name="fc_text" rows="10"></textarea></p>

            			    <p style="display:none;"><input type="hidden" name="fc_send_email" value= "1" /></p>
            				<p style="display:none;"><input type="hidden" name="fc_user_email" value="freshface.support@gmail.com" /></p>
            				<p style="display:none;"><input type="hidden" name="fc_user_subject" value="SHOWTIME DEMO NET CF" /></p>
            				<p><input type="submit" value="Send E-Mail" tabindex="5" id="fc_submit" class="btn_b" name="fc_submit" /></p>
    			        </form>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div><!-- END "div#footer" -->
        <div id="footer_bottom_wrapper">
            <div id="footer_bottom">
                 <div class="left">(C) 2010 IMG - international Maritime Group</div>
                 <div class="right">
                    <a href="#">

					<?php echo $this->Html->image('/img/gfx/logo_footer.png', array("class" => "logo_footer","alt"=>"Showtime")); ?>

					</a>
                </div>
                <div class="clear"></div>
            </div><!-- END "div#footer_bottom" -->
        </div><!-- END "div#footer_bottom_wrapper" -->
    </div><!-- END "div#footer_wrapper" -->
