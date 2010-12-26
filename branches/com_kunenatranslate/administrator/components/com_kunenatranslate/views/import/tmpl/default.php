<?php 
/**
 * @version $Id$
 * Kunena Translate Component
 * 
 * @package	Kunena Translate
 * @Copyright (C) 2010 www.kunena.com All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.com
 */
defined('_JEXEC') or die('Restricted access');
if(JRequest::getVar('task') == 'importview') 
	JToolBarHelper::save('import', 'Import');
else
	JToolBarHelper::save('export', 'Export');
JToolBarHelper::cancel();
?>
<form action="index.php" method="post" name="adminForm">
<table class="adminlist">
	<tbody>
		<tr>
			<td><?php echo JText::_('Client'); ?></td>
			<td><?php echo $this->client; ?></td>
		</tr>
		<tr>
			<td><?php echo JText::_('Language'); ?></td>
			<td><?php echo $this->lang; ?></td>
		</tr>
		<?php if(JRequest::getVar('task') == 'importview'):?>
		<tr>
			<td><?php echo JText::_('add missing labels'); ?></td>
			<td><?php echo JHTMLSelect::booleanlist('addmissinglabel'); ?></td>
		</tr>
		<?php endif; ?>
	</tbody>
</table>
<input type="hidden" name="controller" value="import" />
<input type="hidden" name="option" value="com_kunenatranslate" />
<input type="hidden" name="task" value="" />
<?php echo JHTML::_( 'form.token' ); ?>
</form>
