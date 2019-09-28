<?php


/**
 * Description of Conexao
 *
 * @author Almir
 */
class Conexao {
    
    public static $dsn = 'mysql:host=localhost;dbname=idioma';
    public static $user = 'root';
    public static $pass = '';    
  
    public static function getInstance($sql){
        echo "Teste PDO";
        try {            
            //$myPDO = new PDO($dsn, $user, $pass);
            $myPDO = new PDO('mysql:host=localhost;dbname=idioma', 'root', '');
            $myPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sqlReference = $myPDO->query($sql);
            //$sqlReference = $myPDO ->query("SELECT * FROM professor");
            //var_dump($myPDO); // Testing the connection
            var_dump($sqlReference);
        } catch (PDOException $ex) {
            //echo "Something is wrong";
            echo "Message: <br>".$ex->getMessage();
        }
    }
    
}
