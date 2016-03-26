

<?php $this->Layout->setNode($node); ?>


<div class="container floated">

	<div class="sixteen floated page-title">

		<h2><?php echo $this->Layout->node('title'); ?></h2>

		<nav id="breadcrumbs">
			<ul>
				<li>You are here:</li>
				<li><a href="index-2.html">Home</a></li>
				<li><?php echo $this->Layout->node('title'); ?></li>
			</ul>
		</nav>

	</div>

</div>



<!-- 960 Container -->
<div class="container floated">
	<!-- Sidebar -->
<?php echo $this->element('side_bar'); ?>
        
        
	<div class="eleven floated">
		<div class="page-content">
                    
                    
                    <!-- Content  Here -->
<?php $this->Layout->setNode($node); ?>
                        
                        <div id="node-<?php echo $this->Layout->node('id'); ?>" class="node node-type-<?php echo $this->Layout->node('type'); ?>">
                                <h2><?php //echo $this->Layout->node('title'); ?></h2>
                                <?php
                                        //echo $this->Layout->nodeInfo();
                                        echo $this->Layout->nodeBody();
                                        echo $this->Layout->nodeMoreInfo();
                                ?>
                        </div>

                        <div id="comments" class="node-comments">
                        <?php
                                $type = $types_for_layout[$this->Layout->node('type')];

                                if ($type['Type']['comment_status'] > 0 && $this->Layout->node('comment_status') > 0) {
                                        echo $this->element('comments');
                                }

                                if ($type['Type']['comment_status'] == 2 && $this->Layout->node('comment_status') == 2) {
                                        echo $this->element('comments_form');
                                }
                        ?>
                        </div>
                     <!-- End Content  Here -->

		</div>
	</div>

</div>


