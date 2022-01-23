<?php
    class Players extends Controller
    {
        public function __construct()
        {

        }

        public function index()
        {
            $data = [
                'title' => 'Player Index'
            ];

            $this->view('players/index', $data);
        }

        public function add()
        {
            $data = [
                'title' => 'Add new player'
            ];

            $this->view('players/add', $data);
        }


    }