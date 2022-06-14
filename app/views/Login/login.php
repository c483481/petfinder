<div class="icon">

</div>
<div class="container col-12">
    <div class="login">
        <h1>
            LOG IN
        </h1>
        <?= Flasher::flash(); ?>

        <table>
            <form method="POST" action="<?= BASEURL ?>Login/_login">
                <tr>
                    <td>
                        <center>
                            <label for="Login">Email</label>
                        </center>
                    </td>
                    <td>
                        <input type="email" id="Login" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <label for="Password">Password</label>
                        </center>
                    </td>
                    <td>
                        <input type="password" id="Password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit" name="submit">Masuk</button>
                        </center>
                    </td>
                </tr>
            </form>
        </table>
        <a href="<?= BASEURL ?>Login/register">Belum Punya Akun? Daftar Sekarang &gt;</a>
    </div>
</div>