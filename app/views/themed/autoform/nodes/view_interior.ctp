
  <div class="col-md-10 text-align2"></br>
  	 <?php echo $node['Node']['excerpt']; ?>
  </div>


<div class="col-md-12 hr-tag-home"></div>
      
  <?php     
               if($node['Node']['body'] != null){
                 $str = $node['Node']['body'];
                preg_match_all('~<img ([^>]+)>~i', $str, $matches);
                $images = array();
                foreach ($matches[1] as $str) {
                preg_match_all('~([a-z]([a-z0-9]*)?)=("|\')(.*?)("|\')~is', $str, $pairs);
                $images[] = array_combine($pairs[1], $pairs[4]);
                }

                if($images !=""){ ?>
                	 <div class="col-md-12 ">
                <?php foreach($images as $gallery) {?>
					    <div class="col-md-2">
					       <a href="<?php echo $gallery['src'];?>" data-lightbox="roadtrip">
					    	 <img src="<?php echo $gallery['src'];?>"    class="img-responsive center-block img-prod" alt="<?php echo $gallery['alt'];?>"/>
					       </a>
					   </div>
                  <?php } ?>
                   </div>
                 <?php }?>
                <?php } ?> 