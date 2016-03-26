<div class="movesActivities index">
	<h2><?php __('Moves Activities');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('activity_name');?></th>
			<th><?php echo $this->Paginator->sort('moves_user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('duration');?></th>
			<th><?php echo $this->Paginator->sort('distance');?></th>
			<th><?php echo $this->Paginator->sort('steps');?></th>
			<th><?php echo $this->Paginator->sort('groups');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($movesActivities as $movesActivity):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $movesActivity['MovesActivity']['id']; ?>&nbsp;</td>
		<td><?php echo $movesActivity['MovesActivity']['activity_name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($movesActivity['MovesUser']['userid'], array('controller' => 'moves_users', 'action' => 'view', $movesActivity['MovesUser']['id'])); ?>
		</td>
		<td><?php echo $movesActivity['MovesActivity']['created']; ?>&nbsp;</td>
		<td><?php echo $movesActivity['MovesActivity']['duration']; ?>&nbsp;</td>
		<td><?php echo $movesActivity['MovesActivity']['distance']; ?>&nbsp;</td>
		<td><?php echo $movesActivity['MovesActivity']['steps']; ?>&nbsp;</td>
		<td><?php echo $movesActivity['MovesActivity']['groups']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $movesActivity['MovesActivity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $movesActivity['MovesActivity']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $movesActivity['MovesActivity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $movesActivity['MovesActivity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Moves Activity', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Moves Users', true), array('controller' => 'moves_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moves User', true), array('controller' => 'moves_users', 'action' => 'add')); ?> </li>
	</ul>
</div>