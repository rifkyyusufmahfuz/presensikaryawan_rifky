<section>
    <center>
        <h1><?php echo $judul ?></h1>
    </center>
    <center>
        <h5><?php echo $judul2 ?></h5>
    </center>
    <center><?php echo anchor('web/tambah', 'Tambah Data'); ?> </center>

    <table id="ftable">
        <tr>
            <th>NIP</th>
            <th>Nama Karyawan</th>
            <th>Kehadiran</th>
            <th>Tanggal</th>
            <th>Jam Masuk</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($presensikaryawan_rifky as $dt) {
        ?>
            <tr>
                <td><?php echo $dt->nip ?></td>
                <td><?php echo $dt->namakaryawan ?></td>
                <td><?php echo $dt->kehadiran ?></td>
                <td><?php echo $dt->tanggal ?></td>
                <td><?php echo $dt->jammasuk ?></td>
                <td><?php echo $dt->keterangan ?></td>
                <td>
                    <?php echo anchor('web/edit/' . $dt->nip, '<button class="btnedit">EDIT</button>'); ?>
                    <?php echo anchor('web/hapus/' . $dt->nip, '<button class="btnhapus">HAPUS</button>', array('onclick' => "return confirm('Hapus Data Ini ?')")); ?>
                </td>
            </tr>
        <?php } ?>
    </table>

</section>