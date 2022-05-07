<?php
class Todo_user extends CI_Controller
{

    public function index()
    {
        $this->load->model('Todo_model');
        $todo_users = $this->Todo_model->all();
        $data = array();
        $data['todo_users'] = $todo_users;
        $this->load->view('list', $data);
    }

    public function create()
    {
        $this->load->model('Todo_model');
        $this->form_validation->set_rules('todo_task_name', 'Task Name', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('create');
        } else {
            $formArray = array();
            $formArray['todo_task_name'] = $this->input->post('todo_task_name');
            $this->Todo_model->create($formArray);
            $this->session->set_flashdata('success', 'Record added successfully');
            redirect(base_url() . 'index.php/todo_user/index');
        }
    }

    public function edit($userId)
    {
        $this->load->model('Todo_model');
        $todo_user = $this->Todo_model->getUser($userId);
        $data = array();
        $data['todo_user'] = $todo_user;

        $this->form_validation->set_rules('todo_task_name', 'Task Name', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('edit', $data);
        } else {
            $formArray = array();
            $formArray['todo_task_name'] = $this->input->post('todo_task_name');
            $this->Todo_model->updateUser($userId, $formArray);
            $this->session->set_flashdata('success', "Record Updated Successfully");
            redirect(base_url() . 'index.php/todo_user/index');
        }
    }

    public function delete($todoId)
    {
        $this->load->model('Todo_model');
        $todo_user = $this->Todo_model->getUser($todoId);
        if (empty($todo_user)) {
            $this->session->set_flashdata('failure', 'Record not found in database');
            redirect(base_url() . 'index.php/tod_user/index');
        }
        $this->Todo_model->deleteUser($todoId);
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect(base_url() . 'index.php/todo_user/index');
    }
}
