<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Topics Controller
 *
 * @property \App\Model\Table\TopicsTable $Topics
 */
class TopicsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Topics->find()
            ->contain(['Subjects']);
        $topics = $this->paginate($query);

        $this->set(compact('topics'));
    }

    /**
     * View method
     *
     * @param string|null $id Topic id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $topic = $this->Topics->get($id, contain: ['Subjects', 'Items']);
        $this->set(compact('topic'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $topic = $this->Topics->newEmptyEntity();
        if ($this->request->is('post')) {
            $topic = $this->Topics->patchEntity($topic, $this->request->getData());
            if ($this->Topics->save($topic)) {
                $this->Flash->success(__('The topic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The topic could not be saved. Please, try again.'));
        }
        $subjects = $this->Topics->Subjects->find('list', limit: 200)->all();
        $this->set(compact('topic', 'subjects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Topic id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $topic = $this->Topics->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $topic = $this->Topics->patchEntity($topic, $this->request->getData());
            if ($this->Topics->save($topic)) {
                $this->Flash->success(__('The topic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The topic could not be saved. Please, try again.'));
        }
        $subjects = $this->Topics->Subjects->find('list', limit: 200)->all();
        $this->set(compact('topic', 'subjects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Topic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $topic = $this->Topics->get($id);
        if ($this->Topics->delete($topic)) {
            $this->Flash->success(__('The topic has been deleted.'));
        } else {
            $this->Flash->error(__('The topic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
