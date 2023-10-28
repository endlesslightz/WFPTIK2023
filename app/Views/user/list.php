
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
            <td><img src="/img/<?php echo $u['avatar'] ?>" width="100px"></td>
            <td><?php echo $u['alamat'] ?></td>
            <td><?php echo $u['tempat_lahir'] . ", " . $u['tanggal_lahir'] ?></td>
            <td><?php echo $u['telepon'] ?></td>
            <td><a href="<?php echo "/user/" . $u['id']; ?>"><button class="btn btn-primary"> Detail</button></a></td>
        </tr>
    <?php } ?></tbody>
</table>

                    
<script>
    new DataTable('#user');
</script>