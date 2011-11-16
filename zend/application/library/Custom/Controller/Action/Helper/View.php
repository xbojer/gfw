<?php

class Custom_Controller_Action_Helper_View {

    public $view;

    public function __construct($view) {
        $this->view = $view;
    }

    public function init() {
        // set encoding and doctype
        $this->view->setEncoding('UTF-8');

        $this->view->doctype('XHTML1_STRICT');

        // set the content type and language
        $this->view->headMeta()
                ->appendHttpEquiv('Content-Type', 'text/html; charset=UTF-8');

        $this->view->headMeta()
                ->appendHttpEquiv('Content-Language', 'pl-PL');

        // setting the site in the title
        $this->view->headTitle('gratest.pl');
        //	setting a separator string for segments:
        $this->view->headTitle()->setSeparator(' - ');

        return $this->view;
    }

}