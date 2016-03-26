
  <div class="left-side-content span8">
      <div class="main-title sec">
      <h1>EVENTS</h1>
      </div><!-- Page Title -->	
	<?php foreach ($nodes as $data) { ?>	
      <div class="recent-event">
			<div class="recent-event-img">
				
                                
				<div class="recent-event-links">
					<a href="<?php echo $this->Html->url($data['Node']['path'], true) ; ?>" title=""><i class="theme-icon chain"></i></a>
				</div>
			</div>
			<div class="recent-event-desc">
				<h2><a href="<?php echo $this->Html->url($data['Node']['path'], true) ; ?>" title=""><?php echo $data['Node']['title']; ?></a></h2>
				<div class="recent-event-meta">
					<ul>
						<li><i class="theme-icon calender"></i>Published On <a href="#" title=""><span class="coloured"><?php echo date('M', strtotime($data['Node']['created'])) ; ?> <?php echo date('d', strtotime($data['Node']['created'])) ; ?>, <?php echo date('Y', strtotime($data['Node']['created'])) ; ?> </span></a></li>
						<li><i class="theme-icon clock"></i><span><?php echo date('H:i', strtotime($data['Node']['created'])) ; ?></span></li>
					</ul>
				</div>
				<p><?php echo $data['Node']['excerpt']; ?></p>
				<a class="continue" href="<?php echo $this->Html->url($data['Node']['path'], true) ; ?>" title="">Continue Reading</a>
			</div>
		</div>
<?php }?>
                
                <div class="pagination ">
                      
<div class="paging"><?php echo $paginator->numbers(); ?></div>
<div class="counter"><?php 
//echo $paginator->counter(array('format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true))); 
echo $paginator->counter(array('format' => __('', true))); 

?></div>

        
      </div>
      
    </div><!-- Left Side Content -->

   