<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tampilan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php
    error_reporting(0);
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmptlahir = $_POST['tmptlhir'];
    $tgllahir = $_POST['tgllahir'];
    $jniskelamin = $_POST['jk'];
    $pendidikan = $_POST['iptpendidikan'];

    if (!empty($nama) && !empty($alamat) && !empty($tmptlahir) && !empty($tgllahir) && !empty($jniskelamin) && !empty($pendidikan)) { ?>
        <div class="row">
            <div class="col-6">
                <table class="table table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Pendidikan</th>
                    </tr>
                    <tr>
                        <td class="table-warning">
                            <p class="fst-italic"> <?= $nama ?></p>
                        </td>
                        <td class="table-warning">
                            <p class="fst-italic"> <?= $alamat ?></p>
                        </td>
                        <td class="table-warning">
                            <p class="fst-italic"> <?= $tmptlahir ?></p>
                        </td>
                        <td class="table-warning">
                            <p class="fst-italic"> <?= $tgllahir ?></p>
                        </td>
                        <td class="table-warning">
                            <p class="fst-italic"> <?= $jniskelamin ?></p>
                        </td>
                        <td class="table-warning">
                            <p class="fst-italic"> <?= $pendidikan ?></p>
                        </td>

                    </tr>
                </table>
                </form>
            </div>
        </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>