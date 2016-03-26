<?php
echo $this->Html->css(array('dashboard'));
?>
<div class="dashboard index">
    <h2 style="color: #2373AA"><?php echo $title_for_layout; ?></h2>

    <div class="section">
        <div class="section_content">
            <!--[if !IE]>start section content top<![endif]-->
            <div class="sct">
                <div class="sct_left">
                    <div class="sct_right">
                        <div class="sct_left">
                            <div class="sct_right">
                                <!--[if !IE]>start dashboard menu<![endif]-->
                                <div class="dashboard_menu_wrapper">
                                    <ul class="dashboard_menu">

                                        <li><?php echo $this->Html->link('<span>' . __('WebSite Homepage', true) . '</span>', '/', array('class' => 'd7', 'escape' => false)); ?></li>
                                        <li><?php echo $html->link('<span>' . __('Content Management', true) . '</span>', array('plugin' => null, 'controller' => 'nodes', 'action' => 'index'), array('class' => 'd14', 'escape' => false)); ?></li>
                                        <li><?php echo $html->link('<span>' . __('Users', true) . '</span>', array('plugin' => null, 'controller' => 'users', 'action' => 'index'), array('escape' => false, 'class' => 'd1')); ?></li>      
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>
        </div>
    </div>
</div>