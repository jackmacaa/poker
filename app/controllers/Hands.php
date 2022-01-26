<?php
    class Hands extends Controller
    {
        public function index()
        {
            $data = [
                'title' => 'View Hands'
            ];

            $this->view('hands/index', $data);
        }
        
        public function add()
        {
            $data = [
                'title' => 'Add Hand'
            ];

            $this->view('hands/add', $data);
        }
        
    }