<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="hasil_tes.php" method="post">
  <h2>Form Registrasi</h2>
  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" required><br>
  <label for="alamat">Alamat:</label><br>
  <input type="text" id="alamat" name="alamat" required><br>
  <label for="tempat_lahir">Tempat Lahir:</label><br>
  <input type="text" id="tempat_lahir" name="tempat_lahir" required><br>
  <label for="tanggal_lahir">Tanggal Lahir:</label><br>
  <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>
  <label for="jenis_kelamin">Jenis Kelamin:</label><br>
  <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-Laki" required>
  <label for="laki_laki">Laki-Laki</label>
  <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
  <label for="perempuan">Perempuan</label><br>
  <label for="pendidikan">Pendidikan:</label><br>
  <input type="text" id="pendidikan" name="pendidikan" required><br>
  <input type="submit" value="Submit">
  <input type="reset" value="Cancel">
</form>
</body>
</html>