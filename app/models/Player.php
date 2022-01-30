<?php

    class Player 
    {

        private $db;

        public function __construct()
        {
            $this->db =  new Database; 
        }

        public function getPlayers()
        {
            $this->db->query('SELECT * FROM players');

            return $this->db->resultSet();
        }

        public function addPlayer($data)
        {
            $this->db->query('INSERT INTO players 
            (name, colour, type, image, preflop_raise, preflop_raise_occur, preflop_aggro, preflop_aggro_occur, preflop_notes) 
            VALUES(:name, :colour, :type, :image, :preflop_raise, :preflop_raise_occur, :preflop_aggro, :preflop_aggro_occur, :preflop_notes)
        ');

            // Bind values
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':colour', $data['colour']);
            $this->db->bind(':type', $data['type']);
            $this->db->bind(':image', $data['image']);
            $this->db->bind(':preflop_raise', $data['preflop_raise']);
            $this->db->bind(':preflop_raise_occur', $data['preflop_raise_occur']);
            $this->db->bind(':preflop_aggro', $data['preflop_aggro']);
            $this->db->bind(':preflop_aggro_occur', $data['preflop_aggro_occur']);
            $this->db->bind(':preflop_notes', $data['preflop_notes']);

            // Execute
            if($this->db->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function getPlayerById($id)
        {
            $this->db->query('SELECT * FROM players WHERE id = :id');
            $this->db->bind(':id', $id);

            return $row = $this->db->single();
        }

        public function updatePlayer($data)
        {
            $this->db->query('UPDATE players SET
            name = :name, colour = :colour, type = :type, image = :image, preflop_raise = :preflop_raise, preflop_raise_occur = :preflop_raise_occur, preflop_aggro = :preflop_aggro, preflop_aggro_occur = :preflop_aggro_occur, preflop_notes = :preflop_notes
            WHERE id= :id
        ');

            // Bind values
            $this->db->bind(':id', $data['id']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':colour', $data['colour']);
            $this->db->bind(':type', $data['type']);
            $this->db->bind(':image', $data['image']);
            $this->db->bind(':preflop_raise', $data['preflop_raise']);
            $this->db->bind(':preflop_raise_occur', $data['preflop_raise_occur']);
            $this->db->bind(':preflop_aggro', $data['preflop_aggro']);
            $this->db->bind(':preflop_aggro_occur', $data['preflop_aggro_occur']);
            $this->db->bind(':preflop_notes', $data['preflop_notes']);

            // Execute
            if($this->db->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deletePlayer($id)
        {
            $this->db->query('DELETE FROM players WHERE id = :id');
            // Bind values
            $this->db->bind(':id', $id);

            // Execute
            if($this->db->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
    }