<?php
class View
{

    function generate($content_view, $template_view, $data = null, $data1 = null, $data2 = null)
    {
        include 'app/views/'.$template_view;
    }
}
?>