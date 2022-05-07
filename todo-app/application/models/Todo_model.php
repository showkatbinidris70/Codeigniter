<?php
class Todo_model extends CI_Model
{
    public function create($formArray)
    {
        $this->db->insert('todo', $formArray);
    }


    public function all()
    {
        return $todo_users = $this->db->get('todo')->result_array(); // select  * from users;
    }


    public function getUser($todoId)
    {
        $this->db->where('todo_id', $todoId);
        return $todo_user = $this->db->get('todo')->row_array();
    }

    public function updateUser($userId, $formArray)
    {
        $this->db->where('todo_id', $userId);
        $this->db->update('todo', $formArray);
    }

    public function deleteUser($todoId)
    {
        $this->db->where('todo_id', $todoId);
        $this->db->delete('todo');
    }
}
