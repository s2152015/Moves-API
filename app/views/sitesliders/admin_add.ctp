<div class="sitesliders form">
<?php echo $this->Form->create('Siteslider', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Add Siteslider'); ?></legend>
	<?php
		echo $this->Form->input('name');
		//echo $this->Form->input('path');
		echo "<br>";
		echo "The standerd size of image in current slider is ( width=670 , height=261 )";
        //echo $form->input('Siteslider.fileimage', array('label' => __('Upload Photo', true), 'type' => 'file',"name"=>'data[SiteslidersImage][]'));
		     echo $this->Form->input('Siteslider.imageurl', array('label' => __('Upload', true), 'type' => 'file',));
                //echo $this->Form->input('desc');
		//echo $this->Form->input('imglink',array('default'=>'#'));
//$options=array(    '0'=>'Open in Same Window',    '1'=>'Open in Another Window');
		//echo $this->Form->input('link_target',array('options' =>$options));
		//echo $this->Form->input('image_order',array('default'=>'0'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sitesliders', true), array('action' => 'index'));?></li>
	</ul>
</div>
