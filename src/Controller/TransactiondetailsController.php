<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Transactiondetails Controller
 *
 * @property \App\Model\Table\TransactiondetailsTable $Transactiondetails
 *
 * @method \App\Model\Entity\Transactiondetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TransactiondetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $transactiondetails = $this->paginate($this->Transactiondetails);

        $this->set(compact('transactiondetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Transactiondetail id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transactiondetail = $this->Transactiondetails->get($id, [
            'contain' => ['Transactions'],
        ]);

        $this->set('transactiondetail', $transactiondetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transactiondetail = $this->Transactiondetails->newEntity();
        if ($this->request->is('post')) {
            $transactiondetail = $this->Transactiondetails->patchEntity($transactiondetail, $this->request->getData());
            if ($this->Transactiondetails->save($transactiondetail)) {
                $this->Flash->success(__('The transactiondetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transactiondetail could not be saved. Please, try again.'));
        }
        $this->set(compact('transactiondetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transactiondetail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transactiondetail = $this->Transactiondetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transactiondetail = $this->Transactiondetails->patchEntity($transactiondetail, $this->request->getData());
            if ($this->Transactiondetails->save($transactiondetail)) {
                $this->Flash->success(__('The transactiondetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transactiondetail could not be saved. Please, try again.'));
        }
        $this->set(compact('transactiondetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transactiondetail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transactiondetail = $this->Transactiondetails->get($id);
        if ($this->Transactiondetails->delete($transactiondetail)) {
            $this->Flash->success(__('The transactiondetail has been deleted.'));
        } else {
            $this->Flash->error(__('The transactiondetail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
