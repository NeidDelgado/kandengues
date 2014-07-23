<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/inicio', array('controller' => 'pages', 'action' => 'display', 'inicio'));
	Router::connect('/membro', array('controller' => 'pages', 'action' => 'display', 'membro'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
      
        Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true));
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();
        
        Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
        Router::connect('/jogos', array('controller' => 'pages', 'action' =>'display', 'jogos'));
        Router::connect('/correios', array('controller' => 'pages', 'action' =>'display', 'correios'));
        Router::connect('/redesocial', array('controller' => 'pages', 'action' =>'display', 'redesocial'));
        Router::connect('/downloads', array('controller' => 'pages', 'action' =>'display', 'downloads'));
        Router::connect('/cartões', array('controller' => 'pages', 'action' =>'display', 'cartões'));
        Router::connect('/ajuda', array('controller' => 'pages', 'action' =>'display', 'ajuda'));
        Router::connect('/signup', array('controller' => 'users', 'action' =>'add_member'));
        Router::connect('/slide', array('controller' => 'pages', 'action' =>'display', 'slide'));
/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
