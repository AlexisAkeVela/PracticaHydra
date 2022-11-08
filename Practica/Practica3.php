<form id='login' action='Practica3.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Acceso Especial</legend>
<label for='username' >Usuario :</label>
<input type='text' name='usuario' id='usuario'  maxlength="50" />
<label for='password' >Password :</label>
<input type='password' name='contra' id='contra' maxlength="50" />
<input type='submit' name='Submit' />
</fieldset>
</form>
<?PHP
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $usuario = "79162b02a4adef009a7d8214aaaafec5";
    $pass= "d516b13671a4179d9b7b458a6ebdeb92";

    $userAttempt = $_POST['usuario'];
    $passAttempt = $_POST['contra'];
    if(! (md5($userAttempt) == $usuario && md5($passAttempt) == $pass) )
    {
        Echo "<html>";
        Echo "<title>Buen intento</title>";
        Echo "<b>Datos incorrectos</b>";        
        
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