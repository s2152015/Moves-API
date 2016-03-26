<div class="movesActivities form">
<?php echo $this->Form->create('MovesActivity');?>
	<fieldset>
		<legend><?php __('Admin Add Moves Activity'); ?></legend>
	<?php
		echo $this->Form->input('activity_name');
		echo $this->Form->input('moves_user_id');
		echo $this->Form->input('duration');
		echo $this->Form->input('distance');
		echo $this->Form->input('steps');
		echo $this->Form->input('groups');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Moves Activities', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Moves Users', true), array('controller' => 'moves_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moves User', true), array('controller' => 'moves_users', 'action' => 'add')); ?> </li>
	</ul>
</div>