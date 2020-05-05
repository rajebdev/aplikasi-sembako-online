<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Buyers Controller
 *
 * @property \App\Model\Table\BuyersTable $Buyers
 *
 * @method \App\Model\Entity\Buyer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BuyersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Buyerdetails', 'Users'],
        ];
        $buyers = $this->paginate($this->Buyers);

        $this->set(compact('buyers'));
    }

    /**
     * View method
     *
     * @param string|null $id Buyer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $buyer = $this->Buyers->get($id, [
            'contain' => ['Buyerdetails', 'Users', 'Transactions'],
        ]);

        $this->set('buyer', $buyer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $buyer = $this->Buyers->newEntity();
        if ($this->request->is('post')) {
            $buyer = $this->Buyers->patchEntity($buyer, $this->request->getData());
            if ($this->Buyers->save($buyer)) {
                $this->Flash->success(__('The buyer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The buyer could not be saved. Please, try again.'));
        }
        $buyerdetails = $this->Buyers->Buyerdetails->find('list', ['limit' => 200]);
        $users = $this->Buyers->Users->find('list', ['limit' => 200]);
        $this->set(compact('buyer', 'buyerdetails', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Buyer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $buyer = $this->Buyers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $buyer = $this->Buyers->patchEntity($buyer, $this->request->getData());
            if ($this->Buyers->save($buyer)) {
                $this->Flash->success(__('The buyer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The buyer could not be saved. Please, try again.'));
        }
        $buyerdetails = $this->Buyers->Buyerdetails->find('list', ['limit' => 200]);
        $users = $this->Buyers->Users->find('list', ['limit' => 200]);
        $this->set(compact('buyer', 'buyerdetails', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Buyer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $buyer = $this->Buyers->get($id);
        if ($this->Buyers->delete($buyer)) {
            $this->Flash->success(__('The buyer has been deleted.'));
        } else {
            $this->Flash->error(__('The buyer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
