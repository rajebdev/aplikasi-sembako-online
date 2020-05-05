<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tscancels Controller
 *
 * @property \App\Model\Table\TscancelsTable $Tscancels
 *
 * @method \App\Model\Entity\Tscancel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TscancelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tscancels = $this->paginate($this->Tscancels);

        $this->set(compact('tscancels'));
    }

    /**
     * View method
     *
     * @param string|null $id Tscancel id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tscancel = $this->Tscancels->get($id, [
            'contain' => ['Transactionstatus'],
        ]);

        $this->set('tscancel', $tscancel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tscancel = $this->Tscancels->newEntity();
        if ($this->request->is('post')) {
            $tscancel = $this->Tscancels->patchEntity($tscancel, $this->request->getData());
            if ($this->Tscancels->save($tscancel)) {
                $this->Flash->success(__('The tscancel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tscancel could not be saved. Please, try again.'));
        }
        $this->set(compact('tscancel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tscancel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tscancel = $this->Tscancels->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tscancel = $this->Tscancels->patchEntity($tscancel, $this->request->getData());
            if ($this->Tscancels->save($tscancel)) {
                $this->Flash->success(__('The tscancel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tscancel could not be saved. Please, try again.'));
        }
        $this->set(compact('tscancel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tscancel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tscancel = $this->Tscancels->get($id);
        if ($this->Tscancels->delete($tscancel)) {
            $this->Flash->success(__('The tscancel has been deleted.'));
        } else {
            $this->Flash->error(__('The tscancel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
