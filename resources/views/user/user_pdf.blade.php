<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Daftar Pengguna Peduli Diri</h5>
	</center>

	<table class="table table-bordered">
		<thead>
			<tr>
            <th scope="col">No.</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Telp</th>
            <th scope="col">Username</th>
			<th scope="col">Email</th>
            <th scope="col">Alamat</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($user as $us => $u)
			<tr>
            <td>{{$us+1}}</td>
            <td>{{$u->nik}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->telp ?? "-"}}</td>
            <td>{{$u->username ?? "-"}}</td>
			<td>{{$u->email ?? "-"}}</td>
            <td>{{$u->alamat ?? "-"}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>