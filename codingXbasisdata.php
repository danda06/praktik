<!DOCTYPE html>
<html>
<head>
<title>Formulir Pendaftaran</title>
</head>
<body>

<h1>Formulir Pendaftaran</h1>

<table border="1">
  <tr>
    <th>Id Mahasiswa</th>
    <th><input type="text" name="id_mahasiswa"></th>
  </tr>
  <tr>
    <th>Nama</th>
    <th><input type="text" name="nama"></th>
  </tr>
  <tr>
    <th>Alamat</th>
    <th><textarea name="alamat"></textarea></th>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <th><input type="radio" name="jenis_kelamin" value="Pria"> Pria 
    <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita</th>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <th><input type="date" name="tanggal_lahir"></th>
  </tr>
  <tr>
    <th>Jurusan</th>
    <th>
      <select name="jurusan">
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Ilmu Komputer">Ilmu Komputer</option>
      </select>
    </th>
  </tr>
  <tr>
    <th>Minat</th>
    <th>
      <input type="checkbox" name="minat[]" value="Programming"> Programming 
      <input type="checkbox" name="minat[]" value="Animasi"> Animasi 
      <input type="checkbox" name="minat[]" value="Desain"> Desain
      <input type="checkbox" name="minat[]" value="Mapala"> Mapala
    </th>
  </tr>
  <tr>
    <th>Gambar</th>
    <th><input type="file" name="gambar"></th>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="Daftar">
      <input type="reset" value="Batal">
    </td>
  </tr>
</table>

</body>
</html>