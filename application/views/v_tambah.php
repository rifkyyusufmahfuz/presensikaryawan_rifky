<section>
    <h1>Input Data Karyawan Di Bawah Ini</h1>
    <form action="<?php echo site_url('web/insert') ?>" method="POST">
        <table id="ftable2">
            <tr>
                <td>NIP</td>
                <td><input type="text" name="nip" placeholder="Input NIP"></td>
                <td>Nama Karyawan</td>
                <td><input type="text" name="namakaryawan" id="namakaryawan"></td>

            </tr>

            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" id="tanggal" min="<?= date('Y-m-d'); ?>"></td>
                <td>Jam Masuk</td>
                <td><input type="time" name="jammasuk" id="jammasuk"></td>
            </tr>

            <tr>
                <td>Kehadiran</td>
                <td>
                    <label class="tradio">Hadir
                        <input type="radio" checked="checked" name="kehadiran" value="Hadir">
                        <span class="radioklik"></span>
                    </label>

                    <label class="tradio">Tidak Hadir
                        <input type="radio" name="kehadiran" value="Tidak Hadir">
                        <span class="radioklik"></span>
                    </label>
                </td>
                <td>Keterangan</td>
                <td> <textarea name="keterangan" id="keterangan" cols="30" rows="5"></textarea></td>

                </td>
            </tr>

            <tr>
                <td colspan="4">
                <?php echo anchor('web/index', '<button class="btnsimpan">SIMPAN</button>', array('onclick' => "return confirm('Apakah Data Sudah Benar ?')")); ?>
                    <input type="reset" name="reset" value="BATAL">
                   
                </td>
            </tr>
    </form>
    </table>
</section>