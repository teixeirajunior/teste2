<?php
class usuarios
{
    private $conn;
    function __construct() {
    session_start();
    $servername = "localhost";
    $dbname = "teste";
    $username = "root";
    $password = "@.123abc";
  

    // conexão com banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);
    
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;  
       }

    }


    public function usuario_lista(){
        
       $sql = "SELECT * FROM usuarios ORDER BY usuario_id asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }
    
    public function criar_usuario_info($post_data=array()){
         
       if(isset($post_data['criar_usuario'])){
       $usuario_nome= mysqli_real_escape_string($this->conn,trim($post_data['usuario_nome']));
    

       $sql="INSERT INTO usuarios (usuario_nome) VALUES ('$usuario_nome')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="Usuário criado com sucesso!";
               
              header('Location: index.php');
           }
          
       unset($post_data['criar_usuario']);
       }
       
        
    }
    
    public function ver_usuario_por_id($id){
       if(isset($id)){
       $usuario_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from usuarios where usuario_id='$usuario_id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    
    
    public function alterar_usuario_info($post_data=array()){
       if(isset($post_data['alterar_usuario'])&& isset($post_data['id'])){
           
       $usuario_nome= mysqli_real_escape_string($this->conn,trim($post_data['usuario_nome']));
      
       $usuario_id= mysqli_real_escape_string($this->conn,trim($post_data['id']));

       $sql="UPDATE usuarios SET usuario_nome='$usuario_nome' WHERE usuario_id =$usuario_id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Usuário alterado com sucesso!";
           }
       unset($post_data['alterar_usuario']);
       }   
    }
    
    public function deletar_usuario_por_id($id){
        
       if(isset($id)){
       $usuario_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  usuarios  WHERE usuario_id =$usuario_id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Usuário excluído com sucesso!";
            
           }
       }
         header('Location: index.php'); 
    }
    function __destruct() {
    mysqli_close($this->conn);  
    }
    
}

?>
