<?php
class Controller_Newuser extends Controller
{
    function __construct()
    {
        $this->model = new Model_Newuser();
        $this->view = new View();
    }

    function action_index()
    {
        $send3 = $this->model->newUser();
        $this->view->generate('main_view.php', 'template_view.php', $send, $send2, $send3);

    }
}
?>