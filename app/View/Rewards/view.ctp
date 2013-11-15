<div class="rewards view">
<h2><?php echo __('Reward'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reward['Project']['name'], array('controller' => 'projects', 'action' => 'view', $reward['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Allowed'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['max_allowed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($reward['Reward']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reward'), array('action' => 'edit', $reward['Reward']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reward'), array('action' => 'delete', $reward['Reward']['id']), null, __('Are you sure you want to delete # %s?', $reward['Reward']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rewards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reward'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contributions'), array('controller' => 'contributions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contribution'), array('controller' => 'contributions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contributions'); ?></h3>
	<?php if (!empty($reward['Contribution'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Reward Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reward['Contribution'] as $contribution): ?>
		<tr>
			<td><?php echo $contribution['id']; ?></td>
			<td><?php echo $contribution['user_id']; ?></td>
			<td><?php echo $contribution['reward_id']; ?></td>
			<td><?php echo $contribution['amount']; ?></td>
			<td><?php echo $contribution['created']; ?></td>
			<td><?php echo $contribution['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contributions', 'action' => 'view', $contribution['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contributions', 'action' => 'edit', $contribution['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contributions', 'action' => 'delete', $contribution['id']), null, __('Are you sure you want to delete # %s?', $contribution['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contribution'), array('controller' => 'contributions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
