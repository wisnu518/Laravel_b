<html>
<head>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="container">
  <div class="jumbotron mt-3">
<h1>Stok Kendaraan</h1>
</div>

<a class="btn btn-primary" href="/tambah">Tambah</a><br><br>

<table class="table table-dark" border="1" style="width: 50%;">
  <thead>
	<tr>
		<th scope="col">MERK</th>
		<th scope="col">TIPE</th>
		<th scope="col">HARGA</th>
    <th scope="col">OPSI</th>
	</tr>
</thead>
@foreach ($data as $i)
	<tr>
  		<td>{{ $i->merk }}</td>
  		<td>{{ $i->tipe }}</td>
  		<td>{{ $i->harga }}</td>
      <td>
        <a class="btn btn-warning" href="/ubah/{{ $i->id }}">Ubah</a>
        <a class="btn btn-danger" href="/hapus/{{ $i->id }}">Hapus</a>
      </td>
  	<tr>
@endforeach
</table>
</div>
</body>
</html>