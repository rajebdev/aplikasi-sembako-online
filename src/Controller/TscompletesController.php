<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tscompletes Controller
 *
 * @property \App\Model\Table\TscompletesTable $Tscompletes
 *
 * @method \App\Model\Entity\Tscomplete[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TscompletesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tscompletes = $this->paginate($this->Tscompletes);

        $this->set(compact('tscompletes'));
    }

    /**
     * View method
     *
     * @param string|null $id Tscomplete id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tscomplete = $this->Tscompletes->get($id, [
            'contain' => ['Transactionstatus'],
        ]);

        $this->set('tscomplete', $tscomplete);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tscomplete = $this->Tscompletes->newEntity();
        if ($this->request->is('post')) {
            $tscomplete = $this->Tscompletes->patchEntity($tscomplete, $this->request->getData());
            if ($this->Tscompletes->save($tscomplete)) {
                $this->Flash->success(__('The tscomplete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tscomplete could not be saved. Please, try again.'));
        }
        $this->set(compact('tscomplete'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tscomplete id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tscomplete = $this->Tscompletes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tscomplete = $this->Tscompletes->patchEntity($tscomplete, $this->request->getData());
            if ($this->Tscompletes->save($tscomplete)) {
                $this->Flash->success(__('The tscomplete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tscomplete could not be saved. Please, try again.'));
        }
        $this->set(compact('tscomplete'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tscomplete id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tscomplete = $this->Tscompletes->get($id);
        if ($this->Tscompletes->delete($tscomplete)) {
            $this->Flash->success(__('The tscomplete has been deleted.'));
        } else {
            $this->Flash->error(__('The tscomplete could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
