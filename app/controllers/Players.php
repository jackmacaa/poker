<?php
    class Players extends Controller
    {
        private Player $playerModel;

        public function __construct()
        {
            $this->playerModel = $this->model('Player');
        }

        public function index()
        {
            $players = $this->playerModel->getPlayers();

            $data = [
                'title' => 'Player Index',
                'players' => $players
            ];

            $this->view('players/index', $data);
        }

        public function add()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                // Sanitize POST array
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'name' => trim($_POST['name']),
                    'colour' => trim($_POST['colour']),
                    'type' => trim($_POST['type']),
                    'image' => trim($_POST['image']),
                    'preflop_raise' => trim($_POST['pre-flop-raise']),
                    'preflop_raise_occur' => trim($_POST['pre-flop-raise-occurrences']),
                    'preflop_aggro' => trim($_POST['pre-flop-aggression']),
                    'preflop_aggro_occur' => trim($_POST['pre-flop-aggression-occurrences']),
                    'preflop_notes' => trim($_POST['pre-flop-notes'])
                ];

                if($this->playerModel->addPlayer($data))
                {
                    redirect('players');
                }
                else
                {
                    $this->view('players/add', $data);
                }

            }
            else
            {
                $data = [
                    'title' => 'Add Player'
                ];

                $this->view('players/add', $data); 
            }

        }

        public function edit($id)
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                // Sanitize POST array
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'id' => $id,
                    'name' => trim($_POST['name']),
                    'colour' => trim($_POST['colour']),
                    'type' => trim($_POST['type']),
                    'image' => trim($_POST['image']),
                    'preflop_raise' => trim($_POST['pre-flop-raise']),
                    'preflop_raise_occur' => trim($_POST['pre-flop-raise-occurrences']),
                    'preflop_aggro' => trim($_POST['pre-flop-aggression']),
                    'preflop_aggro_occur' => trim($_POST['pre-flop-aggression-occurrences']),
                    'preflop_notes' => trim($_POST['pre-flop-notes'])
                ];

                if($this->playerModel->updatePlayer($data))
                {
                    redirect('players');
                }
                else
                {
                    die("Something went wrong");
                }

            }
            else
            {
                $player = $this->playerModel->getPlayerById($id);

                $data = [
                    'id' => $id,
                    'title' => 'Edit Player',
                    'name' => $player->name,
                    'colour' => $player->colour,
                    'type' => $player->type,
                    'image' => $player->image,
                    'preflop_raise' => $player->preflop_raise,
                    'preflop_raise_occur' => $player->preflop_raise_occur,
                    'preflop_aggro' => $player->preflop_aggro,
                    'preflop_aggro_occur' => $player->preflop_aggro_occur,
                    'preflop_notes' => $player->preflop_notes
                ];

                $this->view('players/edit', $data); 
            }

        }

        public function delete($id)
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                // Get existing post from model
                $player = $this->playerModel->getPlayerById($id);

                if($this->playerModel->deletePlayer($id))
                {
                    redirect('players');
                }
                else
                {
                    die('Something went wrong');
                }
            }
            else
            {
                redirect('players');
            }
        }


    }