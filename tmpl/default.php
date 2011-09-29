<?php defined('_JEXEC') or die('Restricted access'); // no direct access ?>
<?php echo JText::_('RANDOM USERS'); ?>
<ul>
<?php foreach ($items as $item) { ?>
	<li><?php echo JText::sprintf('USER LABEL', $item->name); ?>
	</li>
	<?php } ?>
</ul>
