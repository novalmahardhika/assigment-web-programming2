<!-- <html>
<head>
 <title>Form Input Matakuliah</title>
</head>
<body>
 <center>
 <form action="<?= base_url('latihan4/mata-kuliah-cetak'); ?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Mata Kuliah
 </th>
 </tr>

 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>

 <tr>
 <th>Nama Mahasiswa</th>
 <th>:</th>
 <td>
 <input type="text" name="nama-mahasiswa" id="nama-mahasiswa">
 </td>
 </tr>

 <tr>
 <th>Kode MTK</th>
 <th>:</th>
 <td>
 <input type="text" name="kode" id="kode">
 </td>
 </tr>

 
 <tr>
 <th>Nama MTK</th>
 <td>:</td>
 <td>
 <input type="text" name="nama" id="nama">
 </td>
 </tr>
 <tr>
 <th>SKS</th>
 <td>:</td>
 <td>
 <select name="sks" id="sks">
 <option value="">Pilih SKS</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
 </select>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Matakuliah</title>
</head>
<body>
    <center>
        <form action="<?= base_url('latihan4/mata-kuliah-cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama-mahasiswa" id="nama-mahasiswa" value="<?= old('nama-mahasiswa'); ?>">
                        <?php if(session('errors.nama-mahasiswa')): ?>
                            <div class="alert alert-danger"><?= session('errors.nama-mahasiswa'); ?></div>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode" value="<?= old('kode'); ?>">
                        <?php if(session('errors.kode')): ?>
                            <div class="alert alert-danger"><?= session('errors.kode'); ?></div>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" value="<?= old('nama'); ?>">
                        <?php if(session('errors.nama')): ?>
                            <div class="alert alert-danger"><?= session('errors.nama'); ?></div>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2" <?= old('sks') == '2' ? 'selected' : ''; ?>>2</option>
                            <option value="3" <?= old('sks') == '3' ? 'selected' : ''; ?>>3</option>
                            <option value="4" <?= old('sks') == '4' ? 'selected' : ''; ?>>4</option>
                        </select>
                        <?php if(session('errors.sks')): ?>
                            <div class="alert alert-danger"><?= session('errors.sks'); ?></div>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
