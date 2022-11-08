<form id='login' action='Practica1.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Acceso Especial</legend>
<label for='username' >Usuario :</label>
<input type='text' name='username' id='username'  maxlength="50" />
<label for='password' >Password :</label>
<input type='password' name='password' id='password' maxlength="50" />
<input type='submit' name='Submit' />
</fieldset>
</form>
<?PHP
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $usuario = "3ea33d4da0d782ef800fda85d98e436d";
    $pass= "e1e32e235eee1f970470a3a6658dfdd5";

    $userAttempt = $_POST['username'];
    $passAttempt = $_POST['password'];
    if(! (md5($userAttempt) == $usuario && md5($passAttempt) == $pass) )
    {
        Echo "<html>";
        Echo "<title>Buen intento</title>";
        Echo "<b>Acceso denegado</b>";        
        
        session_destroy() ;
        
        return false;
    }
    else {
    
        Echo "<html>";
        Echo "<title>Muy bien</title>";
        Echo "<b>Acceso concedido</b>";
 
        session_destroy();    
 
        return true;
    }
}
?>