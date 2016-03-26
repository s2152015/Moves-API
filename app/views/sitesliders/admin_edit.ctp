<div class="sitesliders form">
<?php echo $this->Form->create('Siteslider', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Edit Siteslider'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');

echo "<br>".$html->image($this->data['Siteslider']['path']); 
		echo $this->Form->input('path');
 echo $form->input('Siteslider.fileimage', array('label' => __('Upload New Photo', true), 'type' => 'file',"name"=>'data[SiteslidersImage][]'));
		echo $this->Form->input('desc');
		echo $this->Form->input('imglink');
		$options=array(    '0'=>'Open in Same Window',    '1'=>'Open in Another Window');
		echo $this->Form->input('link_target',array('options' =>$options));
		echo $this->Form->input('image_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Siteslider.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Siteslider.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sitesliders', true), array('action' => 'index'));?></li>
	</ul>
</div>
