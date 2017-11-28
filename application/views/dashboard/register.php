<h1>Registreren als nieuwe gebruiker</h1>
<form action="<?=site_url('dashboard/create_user')?>" method="post">
    Email: <input type="text" name="email" />
    Wachtwoord: <input type="password" name="password" />
    <input type="submit" />
</form>