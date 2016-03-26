<div class="testimonials form">
<?php echo $this->Form->create('Testimonial', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Admin Add Testimonial'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('job');
		echo $this->Form->input('company');
		echo $this->Form->input('description');
                echo $this->Form->input('Testimonial.file', array('label' => __('Upload', true), 'type' => 'file',));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Testimonials', true), array('action' => 'index'));?></li>
	</ul>
</div>