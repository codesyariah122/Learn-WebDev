<?php
class Template {
    protected $ci_;

    function __construct()
    {
        $this->ci_ = &get_instance();
    }

    function template($content, $data=NULL)
    {
            $data['websitename'] = "dieana dNa";
            $data['headernya'] = $this->ci_->load->view('templates/header', $data, TRUE);        
            $data['contentnya'] = $this->ci_->load->view($content, $data, TRUE);        
            $data['footernya'] = $this->ci_->load->view('templates/footer', $data, TRUE);               
            $this->ci_->load->view('templates/index', $data);
    }


}