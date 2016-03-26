<?php if (isset($node['Node']['img_file_name'])) echo $upload->image($node, 'Node.img', array('style' => 'original','alt'=>''),array('class'=>'img-responsive center-block')); ?>
    <div class="col-md-12 bg-color">
    <?php if($node['Node']['slug']=="scope-of-servies"){?>
       <div class="col-md-12 only-margin">
         	<?php echo $node['Node']['body']; ?>
       	</div>
    <?php } else{?>
   <div class="col-md-10 text-align2"><br />
     <h2><?php echo $node['Node']['title'];?> </h2>
      <?php echo $node['Node']['body']; ?>
    </div>
     <?php }?>
    <div class="col-md-12 hr-tag-home"> </div>
 
   </div>
            