<h2>Data berita</h2>
@foreach ($result as $item)
    {{ $item->judul }} - {{ $item->deskripsi }} <br>  
@endforeach