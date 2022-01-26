<?php
    class Notes extends Controller
    {
        public function index()
        {
            $data = [
                'title' => 'View Notes'
            ];

            $this->view('notes/index', $data);
        }
        
        public function add()
        {
            $data = [
                'title' => 'Add Note'
            ];

            $this->view('notes/add', $data);
        }
        
    }