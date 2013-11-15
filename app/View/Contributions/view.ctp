<div class="contributions view">
<h2><?php echo __('Contribution'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contribution['Contribution']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contribution['User']['id'], array('controller' => 'users', 'action' => 'view', $contribution['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reward'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contribution['Reward']['id'], array('controller' => 'rewards', 'action' => 'view', $contribution['Reward']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($contribution['Contribution']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contribution['Contribution']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contribution['Contribution']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contribution'), array('action' => 'edit', $contribution['Contribution']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contribution'), array('action' => 'delete', $contribution['Contribution']['id']), null, __('Are you sure you want to delete # %s?', $contribution['Contribution']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contributions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contribution'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rewards'), array('controller' => 'rewards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reward'), array('controller' => 'rewards', 'action' => 'add')); ?> </li>
	</ul>
</div>
