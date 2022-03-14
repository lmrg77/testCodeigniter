<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_empleado extends CI_Migration {
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE

            ),
            'fecha_ingreso' => array(
                'type' => 'DATE',
                'null' => TRUE,

            ),
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,

            ),
            'salario' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE,

            ),
            
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('Empleado');
    }

    public function down()
    {
        $this->dbforge->drop_table('Empleado');
    }
}