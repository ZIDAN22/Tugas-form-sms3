<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1>Form Registrasi</h1>
                <form class="row g-3" action="tugasformtampilan.php" method="post">
                    <div class="mb-2">
                        <p class="text-secondary">Isi Data Dibawah ini : <br> Nama :</p>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="mb-2">
                        <p class="text-secondary">Alamat :</p>
                        <textarea class="form-control" name="alamat" id="alamat" rows"3"></textarea>
                    </div>
                    <div class="col-md-5">
                        <p class="text-secondary">Tempat lahir :</p>
                        <input type="text" class="form-control" name="tmptlhir" id="tmptlahir" required>
                    </div>
                    <div class="col-md-5">
                        <p class="text-secondary">Tanggal lahir:</p>
                        <input type="text" class="form-control" name="tgllahir" id="tgllahir">
                    </div>
                    <div class="col-md-6">
                        <p class="text-secondary">jenis Kelamin :</p>
                        <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki" checked> Laki-laki
                        <input class="form-check-input" type="radio" name="jk" id="jk" value="perempuan"> perempuan
                    </div>
                    <div class="col-md-4">
                        <p class="text-secondary">Pendidikan</p>
                        <select class="form-select" id="iptpendidikan" name="iptpendidikan">
                            <option selected>D3</option>
                            <option>S1</option>
                            <option>S2</option>
                            <option>S3</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary">select</button>
                        <button type="reset" class="btn btn-secondary">cancel</button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>