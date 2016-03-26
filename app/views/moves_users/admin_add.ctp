<div class="movesUsers form">
<?php echo $this->Form->create('MovesUser');?>
	<fieldset>
		<legend><?php __('Admin Add Moves User'); ?></legend>
	<?php
		echo $this->Form->input('userid');
		echo $this->Form->input('access_token');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Moves Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Moves Activities', true), array('controller' => 'moves_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moves Activity', true), array('controller' => 'moves_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>