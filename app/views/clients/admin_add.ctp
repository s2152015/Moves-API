<div class="clients form">
<?php echo $form->create('Client', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Add Client');?></legend>
	<?php
		echo $form->input('title');
		
echo $this->Form->input('Client.file', array('label' => __('Upload', true), 'type' => 'file',));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Clients', true), array('action' => 'index'));?></li>
	</ul>
</div>
