<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tswaits Controller
 *
 * @property \App\Model\Table\TswaitsTable $Tswaits
 *
 * @method \App\Model\Entity\Tswait[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TswaitsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tswaits = $this->paginate($this->Tswaits);

        $this->set(compact('tswaits'));
    }

    /**
     * View method
     *
     * @param string|null $id Tswait id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tswait = $this->Tswaits->get($id, [
            'contain' => ['Transactionstatus'],
        ]);

        $this->set('tswait', $tswait);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tswait = $this->Tswaits->newEntity();
        if ($this->request->is('post')) {
            $tswait = $this->Tswaits->patchEntity($tswait, $this->request->getData());
            if ($this->Tswaits->save($tswait)) {
                $this->Flash->success(__('The tswait has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tswait could not be saved. Please, try again.'));
        }
        $this->set(compact('tswait'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tswait id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tswait = $this->Tswaits->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tswait = $this->Tswaits->patchEntity($tswait, $this->request->getData());
            if ($this->Tswaits->save($tswait)) {
                $this->Flash->success(__('The tswait has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tswait could not be saved. Please, try again.'));
        }
        $this->set(compact('tswait'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tswait id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tswait = $this->Tswaits->get($id);
        if ($this->Tswaits->delete($tswait)) {
            $this->Flash->success(__('The tswait has been deleted.'));
        } else {
            $this->Flash->error(__('The tswait could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
