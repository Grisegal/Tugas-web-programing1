<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="tampil.php">kembali ke halaman</a>
    <br/><br/>

<form action="tambahdata.php"method="post"name="form1">
    <table>width="700" border="0">
        <tr>
            <td>Nim</td>
            <td><input type="text"name="Nim"size="20"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text"name="Nama"size="30"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text"name="Alamat"size="50"></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td><input type="text"name="Kota"size="20"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td><input type="text"name="Jk"size="1-"></td>
        </tr>
        <tr>
            <td>Tgl lahir</td>
            <td><input type="date"name="tgl"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"name="submit"value="Tambah"></td>
        </tr>
    </table>
</form>
</body>
</html>