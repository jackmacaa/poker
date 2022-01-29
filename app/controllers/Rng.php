<?php
    class Rng extends Controller
    {
        public function index()
        {
            $data = [
                'title' => 'RNG Page'
            ];

            $this->view('rng/index', $data);
        }

        public function threeButtons()
        {
            $data = [
                'title' => 'Three Buttons Page'
            ];

            $this->view('rng/threeButtons', $data);
        }

        public function timer()
        {
            $data = [
                'title' => 'Timer RNG Page'
            ];

            $this->view('rng/timer', $data);
        }

    }