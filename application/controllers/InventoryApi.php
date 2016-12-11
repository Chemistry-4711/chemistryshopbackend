<?php

require APPPATH . '/third_party/restful/libraries/Rest_controller.php';

class InventoryApi extends Rest_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('inventory');
    }


    // GET: /inventoryapi
    function index_get() {
        $key = $this->get('id');

        if (!$key)
            $this->response($this->inventory->all(), 200);
        else
            $this->getHelper($key);

    }

    function item_get()
    {
        $key = $this->get('id');

        $this->getHelper($key);
    }

    function getHelper($key = null) {
        $result = $this->inventory->get($key);

        if ($result != null)
            $this->response($result, 200);
        else
            $this->response(array('error' => 'inventory item not found!'), 404);
    }


    function item_put()
    {
        $key = $this->get('id');
        // $record = array_merge(array('id' => $key), $this->_put_args);
        $record = array_merge(array('id' => $key), json_decode(key($this->_put_args),true));
        $this->inventory->update($record);
        $this->response(array('ok'), 200);
    }


    function item_post()
    {
        $key = $this->get('id');

        $record = array_merge(array('id' => $key), json_decode(key($_POST),true));
        $this->inventory->add($record);
        $this->response(array('ok'), 200);
    }


    function item_delete()
    {
        $key = $this->get('id');
        $this->inventory->delete($key);
        $this->response(array('ok'), 200);
    }

}
