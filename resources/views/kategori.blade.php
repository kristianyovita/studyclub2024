<h2>Daftar Kategori</h2>

<table border ="1" cellspacing="0" width="100%">
    <tr>
        <a href="{{route('kategori.create')}}">Tambah Kategori</a></button>
    <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Keterangan</th>
        <th></th>
        <th></th>
    </tr>

@foreach ($kategori as $data )
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data["nama kategori"]}}</td>
        <td>{{$data->deskripsi}}</td>
    <td>
        <form action="{{route('kategori.show', $data->id)}}" method="get">
            <button type="submit">Detail</button>
        </form>
    </td>
    <td>
        <form action="{{route('kategori.destroy', $data->id) }}" 
        method="post">
            @csrf @method('delete')
            <button type="submit">HAPUS</button>
        </form>
    </td>
</tr>
@endforeach

</table>
    
