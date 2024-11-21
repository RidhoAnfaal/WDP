<table id="example" class="table table-striped table-bordered" style="width: 100%;">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telpon</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php'; // Ensure this file properly connects to SQL Server
            
            $no = 1;
            $query = "SELECT * FROM anggota ORDER BY id DESC";
            $stmt = sqlsrv_query($conn, $query); // Replace $mydb->prepare with sqlsrv_query

            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }

            // Fetch data
            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan';
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
        ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($nama) ?></td>
                    <td><?= htmlspecialchars($jenis_kelamin) ?></td>
                    <td><?= htmlspecialchars($alamat) ?></td>
                    <td><?= htmlspecialchars($no_telp) ?></td>
                    <td>
                        <button id="<?= $id ?>" class="btn btn-success btn-sm edit-data">
                            <i class="fa fa-edit"></i> Edit
                        </button>
                        <button id="<?= $id ?>" class="btn btn-danger btn-sm hapus-data">
                            <i class="fa fa-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
        <?php
            }
            sqlsrv_free_stmt($stmt); // Free up resources
        ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

    function reset() {
        document.getElementById('err_nama').innerHTML = '';
        document.getElementById('err_alamat').innerHTML = '';
        document.getElementById('err_no_telp').innerHTML = '';
        document.getElementById('err_jenis_kelamin').innerHTML = '';
    }

    $('.edit-data').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        let id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: 'get_data.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                reset();
                $('html, body').animate({ scrollTop: 30 }, 'slow');
                document.getElementById('id').value = response.id;
                document.getElementById('nama').value = response.nama;
                document.getElementById('alamat').value = response.alamat;
                document.getElementById('no_telp').value = response.no_telp;

                if (response.jenis_kelamin === 'L') {
                    document.getElementById('jenkel1').checked = true;
                } else {
                    document.getElementById('jenkel2').checked = true;
                }
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });

    $('.hapus-data').click(function() {
        let id = $(this).attr('id');

        $.ajax({
            type: 'POST',
            url: 'hapus_data.php',
            data: {
                id: id
            },
            success: function() {
                $('.data').load('data.php');
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
</script>
