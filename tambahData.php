<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Form Tambah Data</title>
        <link rel="stylesheet" href="css/tambah.css"/>
    </head>
    <body>
        <div class="container">
            <div class="tambah-container">
                <h1>Tambah Data</h1>
                <from action="#">
                    <div class="input-group">
                        <label for="judul">Judul Berita: </label>
                        <input type="text" id="judul" name="judul" required/>
                    </div>
                    <div class="input-group">
                        <label for="jurnalis">Jurnalis: </label>
                        <input type="text" id="jurnalis" name="jurnalis" required/>
                    </div>
                    <div class="input-group">
                        <label for="hariTanggal">Hari & Tanggal: </label>
                        <input type="text" id="hariTanggal" name="hariTanggal" required/>
                    </div>
                    <div class="input-group">
                        <label for="konten">Konten Berita: </label>
                        <textarea type="text" id="konten" name="konten" required></textarea>
                    </div>
                    <div class="input-group">
                        <label for="gambar">Gambar: </label>
                        <input type="file" id="gambar" name="gambar" required/>
                    </div>
                    <div class="input-group">
                        <button name="submit" type="submit">Upload</button>
                    </div>
                    </from>
                </div>
            </div>
    </body>
</html>