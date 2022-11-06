<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
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
    $usuario = "Edwin";
    $pass= "1234";
    if(! ($_POST['username'] == $usuario && $_POST['password'] == $pass) )
    {
        Echo "<html>";
        Echo "<title>Buen intento</title>";
        Echo "<b>Acceso denegado</b>";        
        
        session_destroy() ;
        
        return false;
    }
    else {
    
        Echo "<html>";
        Echo "<title>MUY bien</title>";
        Echo "<b>Acceso concedido</b>";
 
        session_destroy();    
 
        return true;
    }
}
?>