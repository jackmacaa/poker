<?php
    class Pages extends Controller
    {
        public function index()
        {
            $data = [
                'title' => 'Live Poker HUD Homepage'
            ];

            $this->view('pages/index', $data);
        }



    }