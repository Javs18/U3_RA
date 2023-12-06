<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    function index() 
    {
        $this->views->getView($this, 'index' );
    }
    public function registrar () 
    {
       if (empty($_POST['title']) || empty($_POST['start']) || empty($_POST['color'])) {
        $mensaje = array('msg' => 'Todos los campos son requeridos', 'estado' => false, 'tipo' => 'warning');
        }else{
        $id = $_POST['id'];
        $evento = $_POST['title'];
        $fecha = $_POST['start'];
        $color = $_POST['color'];
        if ($id == '') { 
                $respuesta = $this->model->registrar($evento, $fecha, $color);
                if ($respuesta == 1) {
                    $mensaje = array('msg' => 'Evento Registrado', 'estado' => true, 'tipo' => 'success');
                } else {
                    $mensaje = array('msg' => 'Error al registrar el evento', 'estado' => false, 'tipo' => 'error');
                }
            }else{
                $respuesta = $this->model->modificar($evento, $fecha, $color, $id);
                if ($respuesta == 1) {
                    $mensaje = array('msg' => 'Evento Modificado', 'estado' => true, 'tipo' => 'success');
                } else {
                    $mensaje = array('msg' => 'Error al modificar el evento', 'estado' => false, 'tipo' => 'error');
                }
        }
        echo json_encode($mensaje);
        die();
        }

    }
    public function listar () 
    {
        $data = $this->model->listarEventos();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar ($id) 
    {
        $data = $this->model->eliminar($id);
        if ($data == 1) {
            $mensaje = array('msg' => 'Evento Eliminado', 'estado' => true, 'tipo' => 'success');
        } else {
            $mensaje = array('msg' => 'Error al eliminar el evento', 'estado' => false, 'tipo' => 'error');
        }
        echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function drop () 
    {
        $fecha = $_POST['fecha'];
        $id = $_POST['id'];
        $data = $this->model->drop($fecha, $id);
        if ($data == 1) {
            $mensaje = array('msg' => 'Evento Modificado', 'estado' => true, 'tipo' => 'success');
        } else {
            $mensaje = array('msg' => 'Error al modificar el evento', 'estado' => false, 'tipo' => 'error');
        }
        echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
        die();
    } 
}

