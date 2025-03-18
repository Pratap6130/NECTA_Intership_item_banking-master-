<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Papers Controller
 *
 * @property \App\Model\Table\PapersTable $Papers
 */
class PapersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Papers->find();
        $papers = $this->paginate($query);

        $this->set(compact('papers'));
    }

    /**
     * View method
     *
     * @param string|null $id Paper id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paper = $this->Papers->get($id, contain: ['Items']);
        $this->set(compact('paper'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paper = $this->Papers->newEmptyEntity();
        if ($this->request->is('post')) {
            $paper = $this->Papers->patchEntity($paper, $this->request->getData());
            if ($this->Papers->save($paper)) {
                $this->Flash->success(__('The paper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paper could not be saved. Please, try again.'));
        }
        $this->set(compact('paper'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paper id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paper = $this->Papers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paper = $this->Papers->patchEntity($paper, $this->request->getData());
            if ($this->Papers->save($paper)) {
                $this->Flash->success(__('The paper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paper could not be saved. Please, try again.'));
        }
        $this->set(compact('paper'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paper id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paper = $this->Papers->get($id);
        if ($this->Papers->delete($paper)) {
            $this->Flash->success(__('The paper has been deleted.'));
        } else {
            $this->Flash->error(__('The paper could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
