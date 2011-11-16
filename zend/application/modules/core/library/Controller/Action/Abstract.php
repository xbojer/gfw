<?php

abstract class Core_Library_Controller_Action_Abstract extends Custom_Controller_Action_Abstract {

    public $isAjaxRequest = false;

    public function init() {
        $this->_initView();
    }

    /**
     * Before dispatching the requested controller/action
     * check to see if teh request is an AJAX request (via XMLHTTPREQUEST or $_GET['ajax']
     * 
     * If it is an ajax request, remove the layout
     * 
     * If it is not, setup the FlashMessenger
     */
    public function preDispatch() {
        //if  its an AJAX request stop here
        if ($this->_request->isXmlHttpRequest() || isset($_GET['xajax'])) {
            $this->isAjaxRequest = true;
            Zend_Controller_Action_HelperBroker::removeHelper('Layout');
        }

        //Sets the view variable $messages to contain the FlashMessenger array of messages
        $this->view->messages = $this->_helper->FlashMessenger->getMessages();

        $this->view->headLink()->prependStylesheet('/css/reset.css');
        $this->view->headLink(array('rel' => 'stylesheet/less','href' => '/css/core/style.less', 'type' => 'text/css'),'APPEND');
        $this->view->headLink(array('rel' => 'stylesheet/less','href' => '/css/core/gfwb.less', 'type' => 'text/css'),'APPEND');
        
        $this->view->headScript()->prependFile('/js/jquery-1.6.4.min.js');
        $this->view->headScript()->appendFile('/js/jquery-ui-1.8.16.custom.min.js');
        $this->view->headScript()->appendFile('/js/less-1.1.4.js');
        //Sets the base url to the javascripts of the application
        $script[] = 'var base_url = "' . $this->view->baseUrl() . '";';
        $script[] = 'var img_url = "/img/";';
        $this->view->headScript()->prependScript(implode("\n", $script), $type = 'text/javascript', $attrs = array());
    }

    protected function _initView() {
        $view = new Custom_Controller_Action_Helper_View($this->view);
        $this->view = $view->init();
    }

}