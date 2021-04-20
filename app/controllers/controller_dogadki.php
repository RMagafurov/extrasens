<?php
class Controller_Dogadki extends Controller
{

    function __construct()
    {
        $this->model = new Model_Dogadki();
        $this->view = new View();
    }

    function action_index()
    {
        $set_data = $this->model->set_data();
        $get_dogadki = $this->model->get_dogadki();
        $get_reiting = $this->model->get_reiting();
        $this->view->generate('main_view.php', 'template_view.php', $get_dogadki, $get_reiting, $set_data);
    }
}
?>