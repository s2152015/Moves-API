<div class="movesUsers form">
<?php echo $this->Form->create('MovesUser');?>
	<fieldset>
		<legend><?php __('Admin Edit Moves User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('userid');
		echo $this->Form->input('access_token');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('MovesUser.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('MovesUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Moves Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Moves Activities', true), array('controller' => 'moves_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moves Activity', true), array('controller' => 'moves_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>