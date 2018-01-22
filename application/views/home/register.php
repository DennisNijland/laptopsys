<h1>Registreren als nieuwe gebruiker</h1>
<form action="<?=site_url('home/create_user')?>" method="post">
    Email: <input type="text" name="email" />
    Wachtwoord: <input type="password" name="password" required />
    <input type="submit" />
</form>