<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Transactionstatus Controller
 *
 * @property \App\Model\Table\TransactionstatusTable $Transactionstatus
 *
 * @method \App\Model\Entity\Transactionstatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TransactionstatusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tswaits', 'Tspaids', 'Tsprocesses', 'Tssends', 'Tsreceives', 'Tscompletes', 'Tscancels'],
        ];
        $transactionstatus = $this->paginate($this->Transactionstatus);

        $this->set(compact('transactionstatus'));
    }

    /**
     * View method
     *
     * @param string|null $id Transactionstatus id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transactionstatus = $this->Transactionstatus->get($id, [
            'contain' => ['Tswaits', 'Tspaids', 'Tsprocesses', 'Tssends', 'Tsreceives', 'Tscompletes', 'Tscancels', 'Transactions'],
        ]);

        $this->set('transactionstatus', $transactionstatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transactionstatus = $this->Transactionstatus->newEntity();
        if ($this->request->is('post')) {
            $transactionstatus = $this->Transactionstatus->patchEntity($transactionstatus, $this->request->getData());
            if ($this->Transactionstatus->save($transactionstatus)) {
                $this->Flash->success(__('The transactionstatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transactionstatus could not be saved. Please, try again.'));
        }
        $tswaits = $this->Transactionstatus->Tswaits->find('list', ['limit' => 200]);
        $tspaids = $this->Transactionstatus->Tspaids->find('list', ['limit' => 200]);
        $tsprocesses = $this->Transactionstatus->Tsprocesses->find('list', ['limit' => 200]);
        $tssends = $this->Transactionstatus->Tssends->find('list', ['limit' => 200]);
        $tsreceives = $this->Transactionstatus->Tsreceives->find('list', ['limit' => 200]);
        $tscompletes = $this->Transactionstatus->Tscompletes->find('list', ['limit' => 200]);
        $tscancels = $this->Transactionstatus->Tscancels->find('list', ['limit' => 200]);
        $this->set(compact('transactionstatus', 'tswaits', 'tspaids', 'tsprocesses', 'tssends', 'tsreceives', 'tscompletes', 'tscancels'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transactionstatus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transactionstatus = $this->Transactionstatus->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transactionstatus = $this->Transactionstatus->patchEntity($transactionstatus, $this->request->getData());
            if ($this->Transactionstatus->save($transactionstatus)) {
                $this->Flash->success(__('The transactionstatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transactionstatus could not be saved. Please, try again.'));
        }
        $tswaits = $this->Transactionstatus->Tswaits->find('list', ['limit' => 200]);
        $tspaids = $this->Transactionstatus->Tspaids->find('list', ['limit' => 200]);
        $tsprocesses = $this->Transactionstatus->Tsprocesses->find('list', ['limit' => 200]);
        $tssends = $this->Transactionstatus->Tssends->find('list', ['limit' => 200]);
        $tsreceives = $this->Transactionstatus->Tsreceives->find('list', ['limit' => 200]);
        $tscompletes = $this->Transactionstatus->Tscompletes->find('list', ['limit' => 200]);
        $tscancels = $this->Transactionstatus->Tscancels->find('list', ['limit' => 200]);
        $this->set(compact('transactionstatus', 'tswaits', 'tspaids', 'tsprocesses', 'tssends', 'tsreceives', 'tscompletes', 'tscancels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transactionstatus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transactionstatus = $this->Transactionstatus->get($id);
        if ($this->Transactionstatus->delete($transactionstatus)) {
            $this->Flash->success(__('The transactionstatus has been deleted.'));
        } else {
            $this->Flash->error(__('The transactionstatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
