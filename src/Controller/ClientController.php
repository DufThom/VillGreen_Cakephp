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

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class ClientController extends AppController
{

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ LOGIN
//    public function beforeFilter(Event $event)
//    {
//        parent::beforeFilter($event);
//        $this->Auth->allow(['inscription']);
//    }

    public function connexion() // Prévoir la possibilité au client de modifier son mdp (lors de la 1ère connexion, par ex)
    {
        //$identity = $this->Client->get('mail', 'mot2passe');
        //$this->set('ident', $identity);
        //$this->redirect("/Pages/display");
        $this -> render('inscription');
    }

    public function mdpmodif(){
        if ($this->request->is('post')) {
            $mail =  $this->request->data('mail');
            $mot2passe =  $this->request->data('mot2passe');
            $m1 =  $this->request->data('mot2passe1');
            $m2 =  $this->request->data('mot2passe2');

            $query = $this->Client->find()->where(['mail' => $mail, 'mot2passe' => $mot2passe]);
            $cli = $query->first();

            if ($m1 == $m2) {
                $cli->mot2passe = $m1;
                $this->Client->save($cli);
            }

            //  debug($cli);
        }

    }

// ++ Verif Mail unique dans la DB +++++++++++++++++++++++++++++++++++++++++++++++    
    public function verifmail(){

        $this->viewBuilder()->layout('ajax');

        $cli = $this->request->query("query");
        //echo $cli;

        $query = $this->Client->find()->where(['mail' => $cli]);

//        $query = $this->Client->findByMail($cli);

        if($query->count()){
            $this->set('reponse', "oui");
        }
        else {
           $this->set('reponse', "non");
        }

    }    

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ INSCRIPTION
    public function inscription() // Prévoir la demande de confirmation du mdp avant de valider !!!
    {
        if ($this->request->is('post')){
            $cli = $this->Client->newEntity();
            $cli = $this->Client->patchEntity($cli, $this->request->data);
            $cli->mot2passe = (new DefaultPasswordHasher)->hash($cli->mot2passe);
            if ($this->Client->save($cli)){
               $this->Flash->success('Vous êtes bien enregistré.');

                $this->redirect("/Pages/display");
            }
            else{
                $this->Flash->error('Impossible de vous inscrire.');
            }
        }
    }

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ GESTION CLIENT

    public function listecli(){

        $clients = $this->Client->find('all');
        $this->set('clients', $clients);
    }

    public function infos($id){

        $client = $this->Client->get($id);
        $this->set('client', $client);
    }

    public function ajoutcli(){  //prévoir pour que le client puisse se créer son mdp !!!
        if ($this->request->is('post')){
            $cli = $this->Client->newEntity();
            $cli = $this->Client->patchEntity($cli, $this->request->data);
            if ($this->Client->save($cli)){
                $this->Flash->success('Vous êtes bien enregistré.');
                $this->redirect("/Pages/display");
            }
            else{
                $this->Flash->error('Impossible de vous inscrire.');
            }
        }

    }

    public function modifcli($id){

        $client = $this->Client->get($id);
        if($this->request->is('post')){
            $this->Client->patchEntity($client,$this->request->data);
            if($this->Client->save($client)){
                $this->Flash->success('Modifications enregistrées');
                $this->redirect("/client/listecli/");
            }
            else{
                $this->Flash->error('Erreur de modification');
            }
        }
        $this->set('client', $client);
    }

    public function suppcli($id){

        $client = $this->Client->get($id);
        if($this->request->is('post')){
            $this->Client->delete($client, $this->request->data);
            if($this->Client->save($client)){
                $this->Flash->success('Le client a bien été supprimé');
                $this->redirect("/client/listecli/");
            }
            else{
                $this->Flash->error('Erreur lors de la suppression...');
            }
        }
        $this->set('client', $client);

    }
}
































