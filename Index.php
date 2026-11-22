<?php
<?php

$users = [
  ['id_user' => 1, 'username' => 'admin', 'password' => 'rahasia123', 'role' => 'admin'],
  ['id_user' => 2, 'username' => 'kepsek', 'password' => 'kepsek3tangsel', 'role' => 'kepsek'],
  ['id_user' => 3, 'username' => 'budi_rpl', 'password' => 'siswahebat', 'role' => 'siswa'],
];

foreach($users as &$u){
  if($u['username'] == 'budi_rpl'){
    $u['password'] = 'sandibaru2026';
  }
}


$users = array_filter($users, function($u){
  return $u['username'] != 'kepsek';
});
?>
<h2>Tabel users - Setelah Misi 4</h2>
<table border="1" cellpadding="10">
<tr><th>id_user</th><th>username</th><th>password</th><th>role</th></tr>
<?php foreach($users as $u){ ?>
<tr>
  <td><?= $u['id_user'] ?></td>
  <td><?= $u['username'] ?></td>
  <td><?= $u['password'] ?></td>
  <td><?= $u['role'] ?></td>
</tr>
<?php } ?>
</table>