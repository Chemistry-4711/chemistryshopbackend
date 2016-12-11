<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Inventory extends MY_Model {

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    function rules() {
        $config = [
            ['field'=>'id', 'label'=>'Item code', 'rules'=> 'required|integer'],
            ['field'=>'name', 'label'=>'Item name', 'rules'=> 'required'],
            ['field'=>'supplier', 'label'=>'Item supplier', 'rules'=> 'required'],
            ['field'=>'price', 'label'=>'Item price', 'rules'=> 'required|integer'],
            ['field'=>'quantity', 'label'=>'Item quantity', 'rules'=> 'required|integer']
        ];
        return $config;
    }

}
