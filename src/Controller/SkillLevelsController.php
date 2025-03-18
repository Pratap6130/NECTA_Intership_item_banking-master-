<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SkillLevels Controller
 *
 * @property \App\Model\Table\SkillLevelsTable $SkillLevels
 */
class SkillLevelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->SkillLevels->find();
        $skillLevels = $this->paginate($query);

        $this->set(compact('skillLevels'));
    }

    /**
     * View method
     *
     * @param string|null $id Skill Level id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $skillLevel = $this->SkillLevels->get($id, contain: ['Skills']);
        $this->set(compact('skillLevel'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $skillLevel = $this->SkillLevels->newEmptyEntity();
        if ($this->request->is('post')) {
            $skillLevel = $this->SkillLevels->patchEntity($skillLevel, $this->request->getData());
            if ($this->SkillLevels->save($skillLevel)) {
                $this->Flash->success(__('The skill level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skill level could not be saved. Please, try again.'));
        }
        $this->set(compact('skillLevel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Skill Level id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $skillLevel = $this->SkillLevels->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $skillLevel = $this->SkillLevels->patchEntity($skillLevel, $this->request->getData());
            if ($this->SkillLevels->save($skillLevel)) {
                $this->Flash->success(__('The skill level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skill level could not be saved. Please, try again.'));
        }
        $this->set(compact('skillLevel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Skill Level id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $skillLevel = $this->SkillLevels->get($id);
        if ($this->SkillLevels->delete($skillLevel)) {
            $this->Flash->success(__('The skill level has been deleted.'));
        } else {
            $this->Flash->error(__('The skill level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
