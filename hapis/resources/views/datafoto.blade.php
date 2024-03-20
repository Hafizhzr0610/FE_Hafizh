<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-center">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Disabled</a>
        </li>
      </ul>
    </div>
</div>
</nav>

    <!-- table -->
<h1 class="text-center mb-4">Data Foto</h1>
    <div class="container">
        <a href="/tambahfoto" class="btn btn-success">Tambah foto</a>
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
                    <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul Foto</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Deskripsi Foto</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                </tr>
             </thead>
        <tbody>
            @php
             $no = 1;
            @endphp
        @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $row->judulfoto }}</td>
                <td>
                    <img src="{{ asset('storage/'.$row->foto) }}" alt="" style="width: 40px;">
                </td>
                    <td>{{ $row->deskripsifoto }}</td>
                    <td>{{ $row->created_at->format('D M Y') }}</td>
                    <td>
                        <a href="/tampilkanfoto/{{ $row->id }}" type="button" class="btn btn-primary">Edit</a>
                        <a href="/delete/{{ $row->id }}" type="button" class="btn btn-danger">Delete</a>

                    </td>
            </tr>
        @endforeach
  </tbody>
</table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>