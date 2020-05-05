<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tssends Controller
 *
 * @property \App\Model\Table\TssendsTable $Tssends
 *
 * @method \App\Model\Entity\Tssend[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TssendsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tssends = $this->paginate($this->Tssends);

        $this->set(compact('tssends'));
    }

    /**
     * View method
     *
     * @param string|null $id Tssend id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tssend = $this->Tssends->get($id, [
            'contain' => ['Transactionstatus'],
        ]);

        $this->set('tssend', $tssend);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tssend = $this->Tssends->newEntity();
        if ($this->request->is('post')) {
            $tssend = $this->Tssends->patchEntity($tssend, $this->request->getData());
            if ($this->Tssends->save($tssend)) {
                $this->Flash->success(__('The tssend has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tssend could not be saved. Please, try again.'));
        }
        $this->set(compact('tssend'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tssend id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tssend = $this->Tssends->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tssend = $this->Tssends->patchEntity($tssend, $this->request->getData());
            if ($this->Tssends->save($tssend)) {
                $this->Flash->success(__('The tssend has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tssend could not be saved. Please, try again.'));
        }
        $this->set(compact('tssend'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tssend id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tssend = $this->Tssends->get($id);
        if ($this->Tssends->delete($tssend)) {
            $this->Flash->success(__('The tssend has been deleted.'));
        } else {
            $this->Flash->error(__('The tssend could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
