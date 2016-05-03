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
use Cake\Datasource\ConnectionManager;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class ProduitsController extends AppController
{
//    public function beforeFilter(Event $event)
//    {
//        parent::beforeFilter($event);
//        $this->Auth->allow(['liste']);
//    }
    public function liste()
    {
        $prod = $this->Produits->find('all');
        $this->set('items', $prod);
    }

    public function infosprod($id){
        $prod = $this->Produits->get($id);
        $this->set('info', $prod);
    }


    public function rubriq($rid){

        $conn = ConnectionManager::get('default'); //ceci va pemettre d'utiliser une requête sql "complexe"(jointures)

        $sql3 = "SELECT * FROM produits JOIN sousrubriq ON produits.s_rubid = sousrubriq.s_rubid JOIN rubrique ON sousrubriq.rubid = rubrique.rubid WHERE rubrique.rubid = $rid";

        $prod = $conn->execute($sql3)->fetchAll('assoc'); //retourne un tableau associatif

        $this->set('items', $prod);
    }
}






























