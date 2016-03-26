<div class="sixteen columns">
			<h2 class="title">Our Clients</h2>
			
			<!-- partners -->
			<ul class="partners_carousel clearfix">

<?php
$i = 0;
foreach ($clients as $client):
	
?>
				<li><a href="<?php echo $client['Client']['link']; ?>">
 <?php echo $this->Html->image($this->Html->url($client['Client']['imgpath'], true),array('alt'=>$client['Client']['title'])); ?>
                                                    
</a></li>

<?php endforeach; ?>
				
				
			<!-- end:partners -->
			</ul>
			
		</div>

