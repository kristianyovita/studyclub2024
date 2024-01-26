<h2>Detail Kategori</h2>

    <div>
        <p> <b> Nama Kategori : </b> {{$kategori->nama_kategori}}</p>
        <p> <b> Deskripsi : </b> {{$kategori->deskripsi}}</p>
    </div>

    <a href="{{route('kategori.index')}}"> Kembali Ke Index</a>
    <a href="{{route('kategori.edit', $kategori->id)}}"> Edit Kategori</a>