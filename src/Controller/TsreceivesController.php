<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tsreceives Controller
 *
 * @property \App\Model\Table\TsreceivesTable $Tsreceives
 *
 * @method \App\Model\Entity\Tsreceife[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TsreceivesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tsreceives = $this->paginate($this->Tsreceives);

        $this->set(compact('tsreceives'));
    }

    /**
     * View method
     *
     * @param string|null $id Tsreceife id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tsreceife = $this->Tsreceives->get($id, [
            'contain' => [],
        ]);

        $this->set('tsreceife', $tsreceife);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tsreceife = $this->Tsreceives->newEntity();
        if ($this->request->is('post')) {
            $tsreceife = $this->Tsreceives->patchEntity($tsreceife, $this->request->getData());
            if ($this->Tsreceives->save($tsreceife)) {
                $this->Flash->success(__('The tsreceife has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tsreceife could not be saved. Please, try again.'));
        }
        $this->set(compact('tsreceife'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tsreceife id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tsreceife = $this->Tsreceives->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tsreceife = $this->Tsreceives->patchEntity($tsreceife, $this->request->getData());
            if ($this->Tsreceives->save($tsreceife)) {
                $this->Flash->success(__('The tsreceife has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tsreceife could not be saved. Please, try again.'));
        }
        $this->set(compact('tsreceife'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tsreceife id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tsreceife = $this->Tsreceives->get($id);
        if ($this->Tsreceives->delete($tsreceife)) {
            $this->Flash->success(__('The tsreceife has been deleted.'));
        } else {
            $this->Flash->error(__('The tsreceife could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
