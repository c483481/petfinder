<div class="icon">

</div>
<div class="container col-12">

    <?= Flasher::alert(); ?>
    <div class="login">
        <h1>
            Daftar
        </h1>
        <table>
            <form method="POST" action="<?= BASEURL ?>Login/register">
                <tr>
                    <td>
                        <center>
                            <label for="Login">Username</label>
                        </center>
                    </td>
                    <td>
                        <input type="text" id="Login1" name="username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label for="Login">Email</label>
                        </center>
                    </td>
                    <td>
                        <input type="email" id="email" name="email" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label for="Password">Password</label>
                        </center>
                    </td>
                    <td>
                        <input type="password" id="Password1" name="password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label for="repet">Confirm Password</label>
                        </center>
                    </td>
                    <td>
                        <input type="password" id="repet" name="retypePass" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit" name="submit">Daftar</button>
                        </center>
                    </td>
                </tr>
            </form>
        </table>

        <a href="<?= BASEURL ?>login.php"> &lt; Sudah Memiliki Akun?</a>
    </div>
</div>