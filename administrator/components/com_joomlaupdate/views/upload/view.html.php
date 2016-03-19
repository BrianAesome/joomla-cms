<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_joomlaupdate
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Joomla! Update's Update View
 *
 * @since  3.5.0
 */
class JoomlaupdateViewUpload extends JViewLegacy
{
	/**
	 * Renders the view.
	 *
	 * @param   string  $tpl  Template name.
	 *
	 * @return void
	 */
	public function display($tpl=null)
	{
		// Set the toolbar information.
		JToolbarHelper::title(JText::_('COM_JOOMLAUPDATE_OVERVIEW'), 'loop install');
		JToolBarHelper::divider();
		JToolBarHelper::help('JHELP_COMPONENTS_JOOMLA_UPDATE');

		// Load com_installer's language
		$language = JFactory::getLanguage();
		$language->load('com_installer', JPATH_ADMINISTRATOR, 'en-GB', false, true);
		$language->load('com_installer', JPATH_ADMINISTRATOR, null, true);

		$language->load('mod_login', JPATH_ADMINISTRATOR, 'en-GB', false, true);
		$language->load('mod_login', JPATH_ADMINISTRATOR, null, true);

		// Import com_login's model
		if (!class_exists('LoginModelLogin'))
		{
			@include_once JPATH_ADMINISTRATOR . '/components/com_login/models/login.php';
		}

		// Render the view.
		parent::display($tpl);
	}
}
