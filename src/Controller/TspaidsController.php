<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tspaids Controller
 *
 * @property \App\Model\Table\TspaidsTable $Tspaids
 *
 * @method \App\Model\Entity\Tspaid[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TspaidsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tspaids = $this->paginate($this->Tspaids);

        $this->set(compact('tspaids'));
    }

    /**
     * View method
     *
     * @param string|null $id Tspaid id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tspaid = $this->Tspaids->get($id, [
            'contain' => ['Transactionstatus'],
        ]);

        $this->set('tspaid', $tspaid);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tspaid = $this->Tspaids->newEntity();
        if ($this->request->is('post')) {
            $tspaid = $this->Tspaids->patchEntity($tspaid, $this->request->getData());
            if ($this->Tspaids->save($tspaid)) {
                $this->Flash->success(__('The tspaid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tspaid could not be saved. Please, try again.'));
        }
        $this->set(compact('tspaid'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tspaid id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tspaid = $this->Tspaids->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tspaid = $this->Tspaids->patchEntity($tspaid, $this->request->getData());
            if ($this->Tspaids->save($tspaid)) {
                $this->Flash->success(__('The tspaid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tspaid could not be saved. Please, try again.'));
        }
        $this->set(compact('tspaid'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tspaid id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tspaid = $this->Tspaids->get($id);
        if ($this->Tspaids->delete($tspaid)) {
            $this->Flash->success(__('The tspaid has been deleted.'));
        } else {
            $this->Flash->error(__('The tspaid could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
