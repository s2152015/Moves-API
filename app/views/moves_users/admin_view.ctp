<div class="movesUsers view">
<h2><?php  __('Moves User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movesUser['MovesUser']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Userid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movesUser['MovesUser']['userid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Access Token'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movesUser['MovesUser']['access_token']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Moves User', true), array('action' => 'edit', $movesUser['MovesUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Moves User', true), array('action' => 'delete', $movesUser['MovesUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $movesUser['MovesUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Moves Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moves User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Moves Activities', true), array('controller' => 'moves_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moves Activity', true), array('controller' => 'moves_activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Moves Activities');?></h3>
	<?php if (!empty($movesUser['MovesActivity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Activity Name'); ?></th>
		<th><?php __('Moves User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Duration'); ?></th>
		<th><?php __('Distance'); ?></th>
		<th><?php __('Steps'); ?></th>
		<th><?php __('Groups'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($movesUser['MovesActivity'] as $movesActivity):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $movesActivity['id'];?></td>
			<td><?php echo $movesActivity['activity_name'];?></td>
			<td><?php echo $movesActivity['moves_user_id'];?></td>
			<td><?php echo $movesActivity['created'];?></td>
			<td><?php echo $movesActivity['duration'];?></td>
			<td><?php echo $movesActivity['distance'];?></td>
			<td><?php echo $movesActivity['steps'];?></td>
			<td><?php echo $movesActivity['groups'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'moves_activities', 'action' => 'view', $movesActivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'moves_activities', 'action' => 'edit', $movesActivity['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'moves_activities', 'action' => 'delete', $movesActivity['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $movesActivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Moves Activity', true), array('controller' => 'moves_activities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
