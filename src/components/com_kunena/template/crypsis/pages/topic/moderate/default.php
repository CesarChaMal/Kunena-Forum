<?php
/**
 * Kunena Component
 * @package     Kunena.Template.Crypsis
 * @subpackage  Pages.Topic
 *
 * @copyright   (C) 2008 - 2017 Kunena Team. All rights reserved.
 * @license     https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link        https://www.kunena.org
 **/
defined('_JEXEC') or die;

$content = $this->execute('Topic/Moderate');

// Display breadcrumb path to the current category / topic / message / moderate.
$parents = KunenaForumCategoryHelper::getParents($content->category->id);
$parents[] = $content->category;

// @var KunenaForumCategory $parent

foreach ($parents as $parent)
{
	$this->addBreadcrumb(
		$parent->displayField('name'),
		$parent->getUri()
	);
}

$this->addBreadcrumb(
	JText::_('COM_KUNENA_MENU_TOPIC'),
	$content->topic->getUri()
);

if ($content->message)
{
	$this->addBreadcrumb(
		JText::_('COM_KUNENA_MESSAGE'),
		$content->message->getUri()
	);
}

$this->addBreadcrumb(
	JText::_('COM_KUNENA_MESSAGE_ACTIONS_LABEL_MODERATE'),
	$content->uri
);

echo $content;
