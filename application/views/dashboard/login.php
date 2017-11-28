<?=$header?>

<h1>Login</h1>

<form action="<?=site_url('dashboard/login/submit')?>" method="post">
    Email: <input type="text" name="email" />
    <br>
    Wachtwoord: <input type="password" name="password" />
    <input type="submit" />
</form>

<?=$footer?>