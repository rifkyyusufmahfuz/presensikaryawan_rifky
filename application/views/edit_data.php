<section>
    <center>
        <h1><?php echo $judul ?></h1>
    </center>
    <center>
        <h5><?php echo $judul2 ?></h5>
    </center>

    <?php foreach ($presensikaryawan_rifky as $dt) { ?>

        <form action="<?php echo site_url('web/update') ?>" method="POST">
            <table id="ftable2">
                <tr>
                    <td>NIP </td>
                    <td><input type="text" name="nip" value="<?php echo $dt->nip ?>"></td>
                    <td>Nama Karyawan</td>
                    <td><input type="text" name="namakaryawan" value="<?php echo $dt->namakaryawan ?>"></td>

                </tr>

                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" name="tanggal" value="<?php echo $dt->tanggal ?>" min="<?= date('Y-m-d'); ?>"></td>
                    <td>Jam Masuk</td>
                    <td><input type="time" name="jammasuk" value="<?php echo $dt->jammasuk ?>"></td>

                <tr>
                    <td>Kehadiran </td>
                    <td>
                        <label class="tradio">Hadir
                            <input type="radio" name="kehadiran" value="Hadir" <?php echo ($dt->kehadiran == 'Hadir' ? ' checked' : ''); ?>>
                            <span class="radioklik"></span></label>

                        <label class="tradio">Tidak Hadir
                            <input type="radio" name="kehadiran" value="Tidak Hadir" <?php echo ($dt->kehadiran == 'Tidak Hadir' ? ' checked' : ''); ?>>
                            <span class="radioklik"></span></label>
                    </td>
                    <td>Keterangan </td>
                    <td><textarea name="keterangan" cols="30" rows="5"><?php echo $dt->keterangan ?></textarea></td>
                </tr>
                
                <tr>
                    <td colspan="4">
                        <input type="submit" name="edit" value="UPDATE">
                        <input type="reset" name="reset" value="RESET">
                    </td>
                </tr>
        </form>
        </table>
    <?php } ?>
</section>