<form id='login' action='Practica2.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Acceso Especial</legend>
<label for='username' >Usuario :</label>
<input type='text' name='user' id='user'  maxlength="50" />
<label for='password' >Password :</label>
<input type='password' name='pass' id='pass' maxlength="50" />
<input type='submit' name='Submit' />
</fieldset>
</form>
<?PHP
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $usuario = "0bc24d6453cd7013f80f2a3a700ac703";
    $pass= "24b16fede9a67c9251d3e7c7161c83ac";

    $userAttempt = $_POST['user'];
    $passAttempt = $_POST['pass'];
    if(! (md5($userAttempt) == $usuario && md5($passAttempt) == $pass) )
    {
        Echo "<html>";
        Echo "<title>Buen intento</title>";
        Echo "<b>Acceso no valido</b>";        
        
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