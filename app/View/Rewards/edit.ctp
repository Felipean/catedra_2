<div class="rewards form">
<?php echo $this->Form->create('Reward'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reward'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('project_id');
		echo $this->Form->input('description');
		echo $this->Form->input('max_allowed');
		echo $this->Form->input('amount');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reward.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Reward.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rewards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contributions'), array('controller' => 'contributions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contribution'), array('controller' => 'contributions', 'action' => 'add')); ?> </li>
	</ul>
</div>
