<?=$header?>

<h1>Admin Login</h1>

<form action="<?=site_url('admin/login/submit')?>" method="post">
    Email:<input type="text" name="email" />
    <br>
    Wachtwoord:<input type="password" name="password" />
    <input type="submit"/>
</form>

<?=$footer?>