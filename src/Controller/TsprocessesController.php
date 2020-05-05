<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tsprocesses Controller
 *
 * @property \App\Model\Table\TsprocessesTable $Tsprocesses
 *
 * @method \App\Model\Entity\Tsprocess[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TsprocessesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tsprocesses = $this->paginate($this->Tsprocesses);

        $this->set(compact('tsprocesses'));
    }

    /**
     * View method
     *
     * @param string|null $id Tsprocess id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tsprocess = $this->Tsprocesses->get($id, [
            'contain' => ['Transactionstatus'],
        ]);

        $this->set('tsprocess', $tsprocess);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tsprocess = $this->Tsprocesses->newEntity();
        if ($this->request->is('post')) {
            $tsprocess = $this->Tsprocesses->patchEntity($tsprocess, $this->request->getData());
            if ($this->Tsprocesses->save($tsprocess)) {
                $this->Flash->success(__('The tsprocess has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tsprocess could not be saved. Please, try again.'));
        }
        $this->set(compact('tsprocess'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tsprocess id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tsprocess = $this->Tsprocesses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tsprocess = $this->Tsprocesses->patchEntity($tsprocess, $this->request->getData());
            if ($this->Tsprocesses->save($tsprocess)) {
                $this->Flash->success(__('The tsprocess has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tsprocess could not be saved. Please, try again.'));
        }
        $this->set(compact('tsprocess'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tsprocess id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tsprocess = $this->Tsprocesses->get($id);
        if ($this->Tsprocesses->delete($tsprocess)) {
            $this->Flash->success(__('The tsprocess has been deleted.'));
        } else {
            $this->Flash->error(__('The tsprocess could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
