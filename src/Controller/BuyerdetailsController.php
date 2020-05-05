<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Buyerdetails Controller
 *
 * @property \App\Model\Table\BuyerdetailsTable $Buyerdetails
 *
 * @method \App\Model\Entity\Buyerdetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BuyerdetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $buyerdetails = $this->paginate($this->Buyerdetails);

        $this->set(compact('buyerdetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Buyerdetail id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $buyerdetail = $this->Buyerdetails->get($id, [
            'contain' => ['Buyers'],
        ]);

        $this->set('buyerdetail', $buyerdetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $buyerdetail = $this->Buyerdetails->newEntity();
        if ($this->request->is('post')) {
            $buyerdetail = $this->Buyerdetails->patchEntity($buyerdetail, $this->request->getData());
            if ($this->Buyerdetails->save($buyerdetail)) {
                $this->Flash->success(__('The buyerdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The buyerdetail could not be saved. Please, try again.'));
        }
        $this->set(compact('buyerdetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Buyerdetail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $buyerdetail = $this->Buyerdetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $buyerdetail = $this->Buyerdetails->patchEntity($buyerdetail, $this->request->getData());
            if ($this->Buyerdetails->save($buyerdetail)) {
                $this->Flash->success(__('The buyerdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The buyerdetail could not be saved. Please, try again.'));
        }
        $this->set(compact('buyerdetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Buyerdetail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $buyerdetail = $this->Buyerdetails->get($id);
        if ($this->Buyerdetails->delete($buyerdetail)) {
            $this->Flash->success(__('The buyerdetail has been deleted.'));
        } else {
            $this->Flash->error(__('The buyerdetail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
