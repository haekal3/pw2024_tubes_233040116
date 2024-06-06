<?php
require '../functions.php';
$musik = cari($_GET['formControl']);
?>

<table class="table table-bordered">
            <tr class="text-center">
                <th>Id</th>
                <th>News</th>
                <th>Jurnalis</th>
                <th>Hari/Tanggal</th>
                <th>Konten</th>
                <th>Gambar</th>
                <th>Penyanyi</th>
                <th>Genre</th>
                <th>Aksi</th>
            </tr>
            <?php if(empty($musik)) : ?>
            <tr>
                <td colspan="9"><p>Data Berita tidak ditemukan!</p></td>
            </tr>
            <?php endif; ?>

            <?php $i = 1; ?>
            <?php foreach($musik as $msk) : ?>
            <tr>
                <th><?= $i++; ?></th>
                <td><?= $msk ['judul_news']; ?></td>
                <td><?= $msk ['jurnalis']; ?></td>
                <td><?= $msk ['hari_tanggal']; ?></td>
                <td><?= $msk ['konten_news']; ?></td>
                <td><img src="img/<?= $msk ['gambar']; ?>" alt="" width="150px"></td>
                <td><?= $msk ['nama']; ?></td>
                <td><?= $msk ['genre']; ?></td>
                <td class="d-grid gap-2 d-md-flex">
                    <a href="update.php?id_musik=<? $msk['id_musik, id_penyanyi'];?>" class="btn btn-primary btn-sm ">Update</a>
                    <a href="delete.php?id_musik=<?= $msk['id_musik'];?>" onclick="return confirm('apakah anda yakin ingin menghapus data?');" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>