<style>
dt {
background-color:#EEE;
font-style: italic;
font-size: 18px;

}
dd {
background-color:#EDC;


}
</style>
<div class="sitesliders view">
<h2><?php  __('Siteslider');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $siteslider['Siteslider']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $siteslider['Siteslider']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Path'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $siteslider['Siteslider']['path']; ?>

<?php echo "<br>".$html->image($siteslider['Siteslider']['path']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Desc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $siteslider['Siteslider']['desc']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Siteslider', true), array('action' => 'edit', $siteslider['Siteslider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Siteslider', true), array('action' => 'delete', $siteslider['Siteslider']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $siteslider['Siteslider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sitesliders', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Siteslider', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
