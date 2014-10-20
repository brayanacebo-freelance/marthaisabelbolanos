<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Module_Products extends Module {

    public $version = '1.0';
    public $mainTable = 'products';
    public $imageTable = 'product_images';

    public function info() {
        return array(
            'name' => array(
                'en' => 'Products',
                'es' => 'Productos'
            ),
            'description' => array(
                'en' => 'Products @BrayanAcebo 2014',
                'es' => 'Productos @BrayanAcebo 2014',
            ),
            'frontend' => TRUE,
            'backend' => TRUE,
            'menu' => 'content'
        );
    }

    public function install() {

        /* Creación del directorio para carga de imagenes */
        @mkdir($this->upload_path . $this->mainTable, 0777, TRUE);

        // Creando tabla de productos
        $this->dbforge->drop_table($this->mainTable);

        $field = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '455',
                'null' => true
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '455',
                'null' => true
            ),
            'introduction' => array(
                'type' => 'TEXT',
                'null' => true
            ),
            'description' => array(
                'type' => 'TEXT',
                'null' => true
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '455',
                'null' => true
            ),
            'video' => array(
                'type' => 'VARCHAR',
                'constraint' => '455',
                'null' => true
            ),
            'outstanding' => array(
                'type' => 'INT',
                'constraint' => '1',
                'null' => true
            ),
            'created_at' => array(
                'type' => 'DATETIME',
                'constraint' => '',
                'null' => false
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'constraint' => '',
                'null' => false
            )
        );

        $this->dbforge->add_field($field);
        $this->dbforge->add_key('id', true);

        if (!$this->dbforge->create_table($this->mainTable)) {
            return false;
        }

        // Creando tabla para multiples imagenes
        $this->dbforge->drop_table($this->imageTable);

        $field = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ),
            'product_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => false
            ),
            'path' => array(
                'type' => 'VARCHAR',
                'constraint' => '455',
                'null' => true
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'constraint' => '',
                'null' => false
            )
        );

        $this->dbforge->add_field($field);
        $this->dbforge->add_key('id', true);

        if (!$this->dbforge->create_table($this->imageTable)) {
            return false;
        }

        // Final
        return true;
    }

    public function uninstall() {
        $this->dbforge->drop_table($this->mainTable);
        $this->dbforge->drop_table($this->imageTable);
        @rmdir($this->upload_path.$this->mainTable);
        return true;
    }

    public function upgrade($old_version) {
        return true;
    }

    public function help() {
        return "Modulo de productos y multiples imagenes";
    }

}
/* Fin del archivo details.php */