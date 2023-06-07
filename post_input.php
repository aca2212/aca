<h2>Tambah Info</h2>

<form action="post_proses.php" method="post">
    <table>
        <tr>
            <td>JUDUL</td>
            <td><input type="text" name="post_name"></td>
        </tr>
        <tr>
            <td>PENYANYI</td>
            <td><textarea name="post_text" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type="date" name="post_date"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>