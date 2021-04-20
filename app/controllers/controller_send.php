<?php
class Controller_Send extends Controller
{
    function __construct()
    {
        $this->model = new Model_Send();
        $this->view = new View();
    }

    function action_index()
    {
        $send2 =$this->model->sendNum();
        $send = $this->model->get_dogadki();
        $send1 = $this->model->get_reiting();
        $this->view->generate('main_view.php', 'template_view.php', $send, $send1, $send2);

    }
}
?>