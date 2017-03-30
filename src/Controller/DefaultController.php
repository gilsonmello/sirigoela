<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Default Controller
 *
 * @property \App\Model\Table\DefaultTable $Default
 */
class DefaultController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        //$default = $this->paginate($this->Default);
        $title = 'SiriGoela :: Agência Digital';

        $this->set(compact('default', 'title'));
        $this->set('_serialize', ['default']);
    }

    /**
     * View method
     *
     * @param string|null $id Default id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $default = $this->Default->get($id, [
            'contain' => []
        ]);

        $this->set('default', $default);
        $this->set('_serialize', ['default']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $default = $this->Default->newEntity();
        if ($this->request->is('post')) {
            $default = $this->Default->patchEntity($default, $this->request->getData());
            if ($this->Default->save($default)) {
                $this->Flash->success(__('The default has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The default could not be saved. Please, try again.'));
        }
        $this->set(compact('default'));
        $this->set('_serialize', ['default']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Default id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $default = $this->Default->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $default = $this->Default->patchEntity($default, $this->request->getData());
            if ($this->Default->save($default)) {
                $this->Flash->success(__('The default has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The default could not be saved. Please, try again.'));
        }
        $this->set(compact('default'));
        $this->set('_serialize', ['default']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Default id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $default = $this->Default->get($id);
        if ($this->Default->delete($default)) {
            $this->Flash->success(__('The default has been deleted.'));
        } else {
            $this->Flash->error(__('The default could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
