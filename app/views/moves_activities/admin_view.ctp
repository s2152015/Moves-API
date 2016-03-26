<div class="movesActivities view">
<h2><?php  __('Moves Activity');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movesActivity['MovesActivity']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Activity Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movesActivity['MovesActivity']['activity_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Moves User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($movesActivity['MovesUser']['userid'], array('controller' => 'moves_users', 'action' => 'view', $movesActivity['MovesUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movesActivity['MovesActivity']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movesActivity['MovesActivity']['duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Distance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movesActivity['MovesActivity']['distance']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Steps'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movesActivity['MovesActivity']['steps']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Groups'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $movesActivity['MovesActivity']['groups']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Moves Activity', true), array('action' => 'edit', $movesActivity['MovesActivity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Moves Activity', true), array('action' => 'delete', $movesActivity['MovesActivity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $movesActivity['MovesActivity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Moves Activities', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moves Activity', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Moves Users', true), array('controller' => 'moves_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moves User', true), array('controller' => 'moves_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
