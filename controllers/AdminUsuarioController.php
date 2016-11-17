<?php
require_once('view/AdminUsuarioView.php');
require_once('models/UsuarioModel.php');

class AdminUsuarioController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new UsuarioModel();
    $this->vista = new AdminUsuarioView();
  }

  // Listado de Usuarios
  function Usuarios(){
    $usuarios = $this->modelo->getUsuarios();
    $this->vista->usuarios($usuarios);
  }

  // Muestro el listado de agrego una categoria
  function agregar(){
     if((isset($_POST['user_name']))&&(isset($_POST['user_pass']))){
      $hash = password_hash($_POST['user_pass'], PASSWORD_DEFAULT);
      $resultado = $this->modelo->agregarUsuarios($_POST['user_name'],$hash,$_POST['user_permisos']);
      if($resultado)
          $this->vista->mostrarMensaje("Usuario creado correctamente!", "success");
      else
          $this->vista->mostrarMensaje("Error al crear el Usuario, nombre de usuario incorrecto", "danger");
     }
 }

  function agregarUsuarios(){
   $this->agregar();
   $this->vista->agregarUsuarios();
  }

  function agregarUsuariosWeb(){
     $this->agregar();
  }

  // modifico una categoria que viene por get
  function modificarUsuarios(){
    if(isset($_POST['user_name'])){
      // guardo en el modelo
      $resultado = $this->modelo->modificarUsuarios($_GET["id"],$_POST['user_name'],$_POST['user_permisos']);
      $this->vista->mostrarMensaje("Usuario modificado correctamente!", "success");
    }
   // muestro el formulario
   $usuario = $this->modelo->getUsuario($_GET["id"]);
   $this->vista->modificarUsuarios($usuario);
  }

  // Elimino una categoria y redirecciono al inicio de categorias
  function eliminarUsuarios(){
    $this->modelo->eliminarUsuarios($_GET["id"]);
    $this->vista->mostrarMensaje("Cliente elimiando correctamente", "success");
    $this->Usuarios();
  }

  function login(){
     if(isset($_POST['username'])){
       $resultado = $this->modelo->getUsuario(NULL,$_POST['username']);
       $hash=$resultado['user_pass'];
       $password=$_POST['password'];
       if(password_verify($password, $hash)){
          //Credenciales válidas
          session_start();

          $_SESSION["id_usuario"]=$resultado['id_usuario'];
          $_SESSION["user_name"]=$_POST['username'];
          $_SESSION["user_permisos"]=$resultado['user_permisos'];
          $_SESSION["login_time"]=date('h:i:s');

          setcookie("name", $_POST['username'], time()+3600);
          setcookie("user_permisos", 'Usuario', time()+3600);
          //var_dump($_COOKIE); die;

          if($resultado['user_permisos']=='usuario')
            header('Location: http://localhost/maquinarias/');
          else
            header('Location: http://localhost/maquinarias/admin/');
       }
       else{
          $error="Usuario o contraseña incorrectos";
          $this->vista->login($error);
       }
    }else{
     $this->vista->login();
   }
  }

function salir(){
   session_start();
   session_destroy();
   header('Location: http://localhost/maquinarias/admin/');
}

}

 ?>
