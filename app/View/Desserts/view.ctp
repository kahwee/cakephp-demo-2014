<div class="desserts view">
<h2><?php echo __('Dessert'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dessert['Dessert']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dessert['Dessert']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dessert['Dessert']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dessert['Dessert']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dessert'), array('action' => 'edit', $dessert['Dessert']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dessert'), array('action' => 'delete', $dessert['Dessert']['id']), null, __('Are you sure you want to delete # %s?', $dessert['Dessert']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Desserts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dessert'), array('action' => 'add')); ?> </li>
	</ul>
</div>
