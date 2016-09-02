<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\Network\Exception\UnauthorizedException;
use Cake\ORM\TableRegistry;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        //$this->loadComponent('Csrf');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'online',
                'plugin' => false
            ],
            'authenticate' => [
                'Form',
                'ADmad/HybridAuth.HybridAuth' => [
                    // All keys shown below are defaults
                    'fields' => [
                        'provider' => 'provider',
                        'openid_identifier' => 'openid_identifier',
                        'email' => 'email'
                    ],
                    'profileModel' => 'ADmad/HybridAuth.SocialProfiles',
                    'profileModelFkField' => 'user_id',

                    // The URL Hybridauth lib should redirect to after authentication.
                    // If no value is specified you are redirect to this plugin's
                    // HybridAuthController::authenticated() which handles persisting
                    // user info to AuthComponent and redirection.
                    'hauth_return_to' => null
                ]
            ]
        ]);
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }


    public function beforeFilter(Event $event)
    {
        //Autorisation
        $this->Auth->allow();//Tout le monde peux tout faire

        //On charge le model Users pour ce qui suit
        $this->loadModel('Users');

        //Si un utilisateur est en session, j'entre
        if($this->Auth->user() != null) {

            //On récupère en base toutes les données de l'utilisateur, grâce à son 'id" en session
            $user = $this->Users->get($this->Auth->user('id'));

            //Si la base dit que l'utilisateur est déconnecté, j'entre
            //if(!$user->online) {
                //On dit à la base que l'utilisateur est connecté
                //$user->online = true;
            //}

            //On met en base le datetime da la dernère activité de l'utilisateur
            $user->last_active = Time::now();

            //On sauvegarde les changements apportés à l'utilisateur dans la base
            $this->Users->save($user);
        }
    }
}
