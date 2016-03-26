<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Services');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Services'), array('action' => 'index'));

?>

<div class="services index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('desc'); ?></th>
		<th><?php echo $this->Paginator->sort('info_website'); ?></th>
		<th><?php echo $this->Paginator->sort('info_tel'); ?></th>
		<th><?php echo $this->Paginator->sort('info_email'); ?></th>
		<th><?php echo $this->Paginator->sort('info_fax'); ?></th>
		<th><?php echo $this->Paginator->sort('created'); ?></th>
		<th><?php echo $this->Paginator->sort('updated'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($services as $service): ?>
	<tr>
		<td><?php echo h($service['Service']['id']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['name']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['desc']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['info_website']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['info_tel']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['info_email']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['info_fax']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['created']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['updated']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $service['Service']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $service['Service']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('Translate', array('action' => 'editar', $service['Service']['id'])); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $service['Service']['id']), array('icon' => 'trash'), __d('croogo', 'Are you sure you want to delete # %s?', $service['Service']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
