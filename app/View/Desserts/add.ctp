<div class="desserts form">
<?php echo $this->Form->create('Dessert'); ?>
	<fieldset>
		<legend><?php echo __('Add Dessert'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('country');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Desserts'), array('action' => 'index')); ?></li>
	</ul>
</div>
