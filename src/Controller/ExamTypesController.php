<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ExamTypes Controller
 *
 * @property \App\Model\Table\ExamTypesTable $ExamTypes
 */
class ExamTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ExamTypes->find();

        return $this->response->withType('json')
            ->withStringBody(json_encode($query->toArray()));
    }

    /**
     * View method
     *
     * @param string|null $id Exam Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view(?string $id = null)
    {
        $examType = $this->ExamTypes->find('all')->where(['id' => $id]);
        if (!is_null($examType)) {
            return $this->response->withType('json')
                ->withStringBody(json_encode($examType->toArray()));
        } else {
            return $this->response->withType('json')
                ->withStringBody(json_encode([]));
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $examType = $this->ExamTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $examType = $this->ExamTypes->patchEntity($examType, $this->request->getData());
            if ($this->ExamTypes->save($examType)) {
                return $this->response->withType('json')
                    ->withStringBody(json_encode($examType->toArray()));
            }
        } else {
            return $this->response->withType('json')
                ->withStringBody(json_encode([
                    'message' => 'The method is not allowed',
                ]));
        }
        $this->autoRender = false;
    }

    /**
     * Edit method
     *
     * @param string|null $id Exam Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit(?string $id = null)
    {
        $examType = $this->ExamTypes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $examType = $this->ExamTypes->patchEntity($examType, $this->request->getData());
            if ($this->ExamTypes->save($examType)) {
                $this->Flash->success(__('The exam type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exam type could not be saved. Please, try again.'));
        }
        $this->set(compact('examType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Exam Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete(?string $id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $examType = $this->ExamTypes->get($id);
        if ($this->ExamTypes->delete($examType)) {
            $this->Flash->success(__('The exam type has been deleted.'));
        } else {
            $this->Flash->error(__('The exam type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
