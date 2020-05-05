<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sellerdetails Controller
 *
 * @property \App\Model\Table\SellerdetailsTable $Sellerdetails
 *
 * @method \App\Model\Entity\Sellerdetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SellerdetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $sellerdetails = $this->paginate($this->Sellerdetails);

        $this->set(compact('sellerdetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Sellerdetail id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sellerdetail = $this->Sellerdetails->get($id, [
            'contain' => ['Sellers'],
        ]);

        $this->set('sellerdetail', $sellerdetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sellerdetail = $this->Sellerdetails->newEntity();
        if ($this->request->is('post')) {
            $sellerdetail = $this->Sellerdetails->patchEntity($sellerdetail, $this->request->getData());
            if ($this->Sellerdetails->save($sellerdetail)) {
                $this->Flash->success(__('The sellerdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sellerdetail could not be saved. Please, try again.'));
        }
        $this->set(compact('sellerdetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sellerdetail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sellerdetail = $this->Sellerdetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sellerdetail = $this->Sellerdetails->patchEntity($sellerdetail, $this->request->getData());
            if ($this->Sellerdetails->save($sellerdetail)) {
                $this->Flash->success(__('The sellerdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sellerdetail could not be saved. Please, try again.'));
        }
        $this->set(compact('sellerdetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sellerdetail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sellerdetail = $this->Sellerdetails->get($id);
        if ($this->Sellerdetails->delete($sellerdetail)) {
            $this->Flash->success(__('The sellerdetail has been deleted.'));
        } else {
            $this->Flash->error(__('The sellerdetail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
