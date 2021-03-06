<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_tags
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Tags Component Controller
 *
 * @package     Joomla.Site
 * @subpackage  com_tags
 * @since       3.1
 */
class TagsController extends JControllerLegacy
{
	/**
	 * Method to display a view.
	 *
	 * @param   boolean  If true, the view output will be cached
	 * @param   array    An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  JController  This object to support chaining.
	 *
	 * @since   3.1
	 */
	public function display($cachable = true, $urlparams = false)
	{
		$user		= JFactory::getUser();

		// Set the default view name and format from the Request.
		$id = $this->input->getObject('id');
		$id = (array) $id;

		$vName = $this->input->get('view', 'tags');
		$this->input->set('view', $vName);

		if ($user->get('id') ||($this->input->getMethod() == 'POST' && $vName = 'tags'))
		{
			$cachable = false;
		}

		$safeurlparams = array(
			'id'				=> 'ARRAY',
			'type'				=> 'ARRAY',
			'limit'				=> 'UINT',
			'limitstart'		=> 'UINT',
			'filter_order'		=> 'CMD',
			'filter_order_Dir'	=> 'CMD',
			'lang'				=> 'CMD'
		);

		return parent::display($cachable, $safeurlparams);
	}
}
