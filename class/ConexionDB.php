<?php

class ConexionDB {
	
	public $conexion;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $bbdd = 'newscrawler';

    /**
     * ConexionDB constructor.
     */
    public function __construct(){
        $this->conexion = $this->connect();
    }

    /** Funcion para conectar a la base de datos
     * @return mysqli
     */
    private function connect() {
        try {
            $conn = @mysqli_connect($this->host, $this->user, $this->pass, $this->bbdd);
            if (mysqli_connect_errno() != 0) {
                throw new Exception;
            }
            return $conn;
        } catch(Exception $e) {
            echo "<div class='error'>En este momento no podemos procesar su solicitud. Inténtelo más tarde.</div>";
            die();
        }
    }

    /**
     * Funcion para cerrar la conexion a la base de datos
     */
    public function close_conn() {
    	try {
    		$closeBD = @mysqli_close($this->conexion);
    		
    		if ($closeBD == false) {
    			throw new Exception;
    		}
    	} catch (Exception $e) {
    		echo "<div class='error'>Error al procesar su solicitud. Contacte al Administrador del sitio.</div>";
    	}
    }

    /** Metodo que hace el registro inicial de un cliente en la base de datos.
     * @param $email
     * @param $password
     * @param $nombre
     * @return bool
     */
    public function registerUser($email, $password, $nombre) {
        $codigo = $this->generateUserId();
		$password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($this->conexion,"SET NAMES 'utf8'");
    	$query = "INSERT INTO table_users (id_user,email, password, nombre)
                  VALUES ('$codigo','$email','$password','$nombre');";
    	try {
    		$resultado = @mysqli_query($this->conexion, $query);
    		if (!$resultado) {
    			throw new Exception;
    		}
    		return new User($codigo, $email, $nombre);
    	} catch (Exception $e) {
    		if (mysqli_errno($this->conexion) == 1062) {
    			echo "<div class='error'>El usuario ya existe</div>";
    		} else {
    			echo "<div class='error'>En este momento no podemos procesar su solicitud.</div>";
    		}
    		return false;
    	}
    }

    /** Metodo para obtener la informacion del usuario - Login
     * @param $email
     * @param $password
     * @return string|User
     */
    public function loginUser($email, $password) {
        $query = "SELECT * FROM table_users
                  WHERE email = '$email';";
        try {
            $resultado = mysqli_query($this->conexion, $query);
            $fila = mysqli_fetch_assoc($resultado);
            if (mysqli_num_rows($resultado)) {
                if (password_verify($password, $fila["password"])) {
                    return new User($fila["id_user"], $email, $fila["nombre"]);
                } else {
                    throw new Exception("Error1");
                }
            } else {
                throw new Exception("Error2");
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /** Metodo para obtener los canales guardados de un usuario
     * @param $user_id
     * @return array|null
     */
    public function getRSS($user_id) {
        $query = "SELECT r.xml FROM table_user_feed uf, table_rss r
                  WHERE uf.userfeed2user = '$user_id'
                  AND uf.userfeed2rss = r.id_rss;";

        try {
            $resultado = mysqli_query($this->conexion, $query);
            if (mysqli_num_rows($resultado)) {
                $lista = array();
                while ($row=mysqli_fetch_assoc($resultado)) {
                    array_push($lista,$row['xml']);
                }
                return $lista;
            }
        } catch (Exception $e) {
            return null;
        }
    }

    /** Obtener url del archivo xml de un canal RSS
     * @param $descripcion
     * @return array|null
     */
    public function getRssUrl($descripcion){
        $query = "SELECT r.xml FROM table_rss r
                  WHERE UPPER(r.descripcion) = '".strtoupper($descripcion)."';";

        try {
            $resultado = mysqli_query($this->conexion, $query);
            if (mysqli_num_rows($resultado)) {
                $fila = mysqli_fetch_array($resultado);
                return $fila['xml'];
            }
        } catch (Exception $e) {
            return null;
        }
    }


    public function getChannels() {
        $query = "SELECT r.xml FROM table_rss r;";

        try {
            $resultado = mysqli_query($this->conexion, $query);
            if (mysqli_num_rows($resultado)) {
                return $resultado;
            }
        } catch (Exception $e) {
            return null;
        }
    }
    /**
     * Generar codigo de 5 caracteres
     * @return string
     */
    public function generateUserId() {
        $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $id = "";
        for ($i = 0; $i < 5; $i++) {
            $id .= $chars[rand(0, 35)];
        }
        return $id;
    }
	
}

?>