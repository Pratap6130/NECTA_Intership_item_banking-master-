<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ReversedItems Controller
 *
 * @property \App\Model\Table\ReversedItemsTable $ReversedItems
 */
class ReversedItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ReversedItems->find()
            ->contain(['Items']);
        $reversedItems = $this->paginate($query);

        $this->set(compact('reversedItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Reversed Item id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reversedItem = $this->ReversedItems->get($id, contain: ['Items']);
        $this->set(compact('reversedItem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reversedItem = $this->ReversedItems->newEmptyEntity();
        if ($this->request->is('post')) {
            $reversedItem = $this->ReversedItems->patchEntity($reversedItem, $this->request->getData());
            if ($this->ReversedItems->save($reversedItem)) {
                $this->Flash->success(__('The reversed item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reversed item could not be saved. Please, try again.'));
        }
        $items = $this->ReversedItems->Items->find('list', limit: 200)->all();
        $this->set(compact('reversedItem', 'items'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reversed Item id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reversedItem = $this->ReversedItems->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reversedItem = $this->ReversedItems->patchEntity($reversedItem, $this->request->getData());
            if ($this->ReversedItems->save($reversedItem)) {
                $this->Flash->success(__('The reversed item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reversed item could not be saved. Please, try again.'));
        }
        $items = $this->ReversedItems->Items->find('list', limit: 200)->all();
        $this->set(compact('reversedItem', 'items'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reversed Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reversedItem = $this->ReversedItems->get($id);
        if ($this->ReversedItems->delete($reversedItem)) {
            $this->Flash->success(__('The reversed item has been deleted.'));
        } else {
            $this->Flash->error(__('The reversed item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
