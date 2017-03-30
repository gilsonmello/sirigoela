<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Main Controller
 *
 * @property \App\Model\Table\MainTable $Main
 */
class MainController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $main = $this->paginate($this->Main);

        $this->set(compact('main'));
        $this->set('_serialize', ['main']);
    }

    /**
     * View method
     *
     * @param string|null $id Main id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $main = $this->Main->get($id, [
            'contain' => []
        ]);

        $this->set('main', $main);
        $this->set('_serialize', ['main']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $main = $this->Main->newEntity();
        if ($this->request->is('post')) {
            $main = $this->Main->patchEntity($main, $this->request->getData());
            if ($this->Main->save($main)) {
                $this->Flash->success(__('The main has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The main could not be saved. Please, try again.'));
        }
        $this->set(compact('main'));
        $this->set('_serialize', ['main']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Main id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $main = $this->Main->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $main = $this->Main->patchEntity($main, $this->request->getData());
            if ($this->Main->save($main)) {
                $this->Flash->success(__('The main has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The main could not be saved. Please, try again.'));
        }
        $this->set(compact('main'));
        $this->set('_serialize', ['main']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Main id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $main = $this->Main->get($id);
        if ($this->Main->delete($main)) {
            $this->Flash->success(__('The main has been deleted.'));
        } else {
            $this->Flash->error(__('The main could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
