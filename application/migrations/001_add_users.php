<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'first_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'last_name' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                        ),
                        'position' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                        ),
                        'created_date' => array(
                            'type' => 'DATE'
                        )
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('users');

                $this->db->query(
                    "INSERT INTO `users` (`id`, `first_name`, `last_name`, `position`, `created_date`) 
                    VALUES 
                    (null, 'Mark', 'Otto', 'Web Developer', '2021-02-23'),
                    (null, 'Marky', 'Ave', 'Web Design', '2021-02-23')
                ");
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}