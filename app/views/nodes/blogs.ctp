 <div class="container callout standard">
                        
                        <div class="twelve columns">
                            <h4>Transhome Blog</h4>
                            <p class="link-location">You are here: <a href="/">Home</a> /Blogs</p>
                        </div>
                        
                    </div>
                    <div class="callout-hr"></div>                        
                    <div class="container">
                    
                        <div class="twelve columns">
                        
                              <?php 
                        //print_r($nodes);exit;
                        
                        foreach ($nodes as $result) {?>
                            <div class="blog style-3">
                                
                                <div class="border">
                                    <div class="meta">
                                        <p>
                                            <span><?php echo date('M', strtotime($result['Node']['created'])) ; ?></span>
                                             <?php echo date('d', strtotime($result['Node']['created'])) ; ?>
                                        </p>
                                    </div>
                                    
                                     <?php if (isset($result['Node']['img_file_name'])) echo $upload->image($result, 'Node.img', array('style' => 'thumb2'),array("class" => "scale-with-grid")); ?>
                                   	<a class='link' href="<?php echo $this->Html->url($result['Node']['path'], true) ; ?>"></a>
                                </div>
                               
                                <div class="description">
                                    <h5><a href="<?php echo $this->Html->url($result['Node']['path'], true) ; ?>"><?php echo $result['Node']['title']; ?></a></h5>
                                    <p><?php echo $result['Node']['excerpt']; ?></p>
                                    
                                   <a href="<?php echo $this->Html->url($result['Node']['path'], true) ; ?>" class="button color"><span>More</span></a>
                                </div>
                                <div class="clear"></div>
                                <div class="foot"></div>
                                
                            </div><!-- Blog Ends -->
                           <?php }?>
                            
                                           <div class="pagination ">
                      
<div class="paging"><?php echo $paginator->numbers(); ?></div>
<div class="counter"><?php 
//echo $paginator->counter(array('format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true))); 
echo $paginator->counter(array('format' => __('', true))); 

?></div>
      </div>
                        </div>
                        <div class="four columns">
                            <div class="sidebar">
                                <div class="sideborder"></div>
                                <h5>Most Popular Posts</h5>
                                <ul class="blogs">
                                    
                             <?php $results_top = $this->requestAction("nodes/blogstop");
 
                             foreach ($results_top as $result1) {?>
                                     <li>
                                        <div class="border">
                                                <?php if (isset($result1['Node']['img_file_name'])) echo $upload->image($result1, 'Node.img', array('style' => 'thumb'),array("class" => "scale-with-grid")); ?>
                                   	<a class='link' href="<?php echo $this->Html->url($result1['Node']['path'], true) ; ?>"></a>
                               
                                        </div>
                                        <p>
                                            <a href="<?php echo $this->Html->url($result1['Node']['path'], true) ; ?>"><?php echo $result1['Node']['title']; ?></a>
                                            <?php echo $result1['Node']['title']; ?>
                                           
                                       
                                            <span><?php echo date('M', strtotime($result1['Node']['created'])) ; ?> <?php echo date('d', strtotime($result1['Node']['created'])) ; ?>, <?php echo date('Y', strtotime($result['Node']['created'])) ; ?></span>
                                        </p>
                                        <div class="clear"></div>
                                    </li>
                                    <?php }?>
                                </ul>
                                
                                <div class="clear"></div>
                                
                                <h5>Tag Cloud</h5>
                                <ul class="cloud">
                                    <?php
            $results = $this->requestAction("terms/gettags");
            foreach ($results as $data) {
            ?>
                                    <li>
                                        <a href="/blog/term/<?php echo $data['Term']['slug']; ?>"><?php echo $data['Term']['title']; ?></a>
                                    </li>
                                    <?php } ?>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                      </div>    
                                
                        <div class="clear"></div>
                                            
                        <div class="sixteen columns">
                       		<span class="hr lip-quote"></span>
                            <blockquote class="standard bottom">
                                "Making the simple complicated is commonplace; making the complicated simple, awesomely simple, that's creativity" <br />- Charles Mingus
                            </blockquote>
                        </div>
        
                    </div>
              
                    