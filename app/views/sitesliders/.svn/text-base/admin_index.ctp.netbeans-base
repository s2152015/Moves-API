<div class="sitesliders index">
	<h2><?php __('Sitesliders');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('path');?></th>
			<th><?php echo $this->Paginator->sort('desc');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sitesliders as $siteslider):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
            <td><?php echo $siteslider['Siteslider']['id']; ?>&nbsp;</td>
		<td><?php echo $siteslider['Siteslider']['name']; ?>&nbsp;</td>
		<td><?php echo $html->image($siteslider['Siteslider']['path'],array('width'=>'300','height'=>'100')); ?>&nbsp;</td>
		<td><?php echo $siteslider['Siteslider']['desc']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $siteslider['Siteslider']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $siteslider['Siteslider']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $siteslider['Siteslider']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $siteslider['Siteslider']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Siteslider', true), array('action' => 'add')); ?></li>
	</ul>
</div>