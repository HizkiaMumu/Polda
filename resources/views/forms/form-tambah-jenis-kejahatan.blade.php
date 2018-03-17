<div style="padding: 15px;">

  <form action="/post/jenis-kejahatan" enctype="multipart/form-data" method="POST">

    {{ csrf_field() }}

    <div class="form-group">
      <label>Jenis Kejahatan</label>
      <input type="text" name="nama_jenis_kejahatan" class="form-control" placeholder="Masukan Jenis Kejahatan...">
    </div>

    <div class="form-group">
      <label>Deskripsi</label>
      <textarea name="deskripsi" rows="8" cols="80" class="form-control" placeholder="Masukan keterangan dari kategori ini..."></textarea>
    </div>

    <div class="form-group">
      <label for="icon_jenis_kejahatan" class="btn btn-purple btn-rounded waves-light waves-effect"><i class="fi-cloud-upload m-r-5"></i> Upload Icons</label>
      <label for="icon_jenis_kejahatan" class="text-muted font-14">Pilih Gambar untuk di upload</label>
      <input type="file" name="icon_jenis_kejahatan" style="display: none;" id="icon_jenis_kejahatan">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-info btn-rounded btn-block waves-light waves-effect">Submit</button>
    </div>

  </form>

</div>
