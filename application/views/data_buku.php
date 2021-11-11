<!DOCTYPE html>
<html lang="en"><head>
    <title>Document</title>
</head>
<body>
        <table id="dataTable" class="table display responsive nowrap" style="width:100%">
            <thead class="bg-primary">
                <tr>
                    <th>#</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Penerbit</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($buku as $row) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['kd_buku'] ?></td>
                        <td><?= $row['judul_buku'] ?></td>
                        <td><?= $row['penerbit'] ?></td>
                        <td><?= $row['pengarang'] ?></td>
                        <td><?= $row['tahun_terbit'] ?></td>
                        <td><?= $row['jumlah'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <script type="text/javascript">
            window.print();
        </script>
</body>
</html>