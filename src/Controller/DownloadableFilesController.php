<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DownloadableFiles Controller
 *
 * @property \App\Model\Table\DownloadableFilesTable $DownloadableFiles
 *
 * @method \App\Model\Entity\DownloadableFile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DownloadableFilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['DocumentTypes']
        ];
        $downloadableFiles = $this->paginate($this->DownloadableFiles);

        $this->set(compact('downloadableFiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Downloadable File id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $downloadableFile = $this->DownloadableFiles->get($id, [
            'contain' => ['DocumentTypes']
        ]);

        $this->set('downloadableFile', $downloadableFile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $downloadableFile = $this->DownloadableFiles->newEntity();
        if ($this->request->is('post')) {
            $downloadableFile = $this->DownloadableFiles->patchEntity($downloadableFile, $this->request->getData());
            if ($this->DownloadableFiles->save($downloadableFile)) {
                $this->Flash->success(__('The downloadable file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The downloadable file could not be saved. Please, try again.'));
        }
        $documentTypes = $this->DownloadableFiles->DocumentTypes->find('list', ['limit' => 200]);
        $this->set(compact('downloadableFile', 'documentTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Downloadable File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $downloadableFile = $this->DownloadableFiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $downloadableFile = $this->DownloadableFiles->patchEntity($downloadableFile, $this->request->getData());
            if ($this->DownloadableFiles->save($downloadableFile)) {
                $this->Flash->success(__('The downloadable file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The downloadable file could not be saved. Please, try again.'));
        }
        $documentTypes = $this->DownloadableFiles->DocumentTypes->find('list', ['limit' => 200]);
        $this->set(compact('downloadableFile', 'documentTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Downloadable File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $downloadableFile = $this->DownloadableFiles->get($id);
        if ($this->DownloadableFiles->delete($downloadableFile)) {
            $this->Flash->success(__('The downloadable file has been deleted.'));
        } else {
            $this->Flash->error(__('The downloadable file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
