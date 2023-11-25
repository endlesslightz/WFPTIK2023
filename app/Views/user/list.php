<table id="user">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Avatar</th>
        <th>Alamat</th>
        <th>TTL</th>
        <th>Telepon</th>
        <th>Aksi</th>
    </tr></thead>
    <tbody> 
    <?php
    $i = 1;
    foreach ($user as $u) { ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $u['nama'] ?></td>
            <td>
            <?php if (!file_exists(ROOTPATH."public\images\avatar\\".$u['avatar'] )) { ?>
                <img src="<?= $u['avatar'] ?>" width="100px"></td>
            <?php } else { ?>
            <img src="<?= base_url('/images/avatar/'.$u['avatar']) ?>" width="100px"></td>
            <?php  } ?>
            <td><?php echo $u['alamat'] ?></td>
            <td><?php echo $u['tempat_lahir'] . ", " . $u['tanggal_lahir'] ?></td>
            <td><?php echo $u['telepon'] ?></td>
            <td>
                <a href="<?php echo "/user/" . $u['id']; ?>"><button class="btn btn-primary"> Detail</button></a>
                    <a href="#" id="edit" onclick="edit(<?= $u['id'] ?>)" class="btn btn-info">Edit</a>
                    <a href="#" id="edit" onclick="hapus(<?= $u['id'] ?>)" class="btn btn-danger">Hapus</a>
        </td>
        </tr>
    <?php } ?></tbody>
</table>

                    
<script>
    new DataTable('#user');
</script>