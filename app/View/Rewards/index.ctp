<div class="rewards index">
	<h2><?php echo __('Rewards'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('max_allowed'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('order'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rewards as $reward): ?>
	<tr>
		<td><?php echo h($reward['Reward']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reward['Project']['name'], array('controller' => 'projects', 'action' => 'view', $reward['Project']['id'])); ?>
		</td>
		<td><?php echo h($reward['Reward']['description']); ?>&nbsp;</td>
		<td><?php echo h($reward['Reward']['max_allowed']); ?>&nbsp;</td>
		<td><?php echo h($reward['Reward']['amount']); ?>&nbsp;</td>
		<td><?php echo h($reward['Reward']['order']); ?>&nbsp;</td>
		<td><?php echo h($reward['Reward']['created']); ?>&nbsp;</td>
		<td><?php echo h($reward['Reward']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reward['Reward']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reward['Reward']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reward['Reward']['id']), null, __('Are you sure you want to delete # %s?', $reward['Reward']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Reward'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contributions'), array('controller' => 'contributions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contribution'), array('controller' => 'contributions', 'action' => 'add')); ?> </li>
	</ul>
</div>
