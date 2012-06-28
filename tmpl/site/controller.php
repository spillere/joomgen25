<?php
/**
 * {{controller}} Controller of the {{identifier}} Component
 *
 * PHP versions 5
 *
 * @category  Controller
 * @package   {{identifier}}
 * @author    {{author_name}} <{{author_email}}>
 * @copyright {{copyright}}
 * @license   {{license}}
 * @version   {{version}}
 * @link      {{author_url}}
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

/**
 * {{identifier}} Component {{controller}} Controller
 *
 * @category Controller
 * @package  {{identifier}}
 * @author   {{author_name}} <{{author_email}}>
 * @license  {{license}}
 * @link     {{author_url}}
 * @since    1.0
 */
class {{identifier}}Controller{{controller}} extends {{identifier}}Controller
{
    /**
     * Constructor
     *
     * @return void
     * @access public
     * @since  1.0
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Method to save an object
     *
     * @return void
     * @access public
     * @since  1.0
     */
    public function save()
    {
        JRequest::checkToken() or jexit('Invalid Token');
        $model = $this->getModel('{{controller}}');
        if ($model->save()) {
            $msg = JText::_('Object created successfully!');
            $url = 'index.php?option={{component}}&amp;view={{controller}}&amp;layout=list';
        } else {
            $msg = JText::_('Error while created object: '.$model->getError());
            $url = 'index.php?option={{component}}&amp;view={{controller}}&amp;layout=new';
        }
        $this->setRedirect(JRoute::_($url, false), $msg);
    }
}
