$(document).ready(function(){

  initDataTable();

  $("#tambahKategori").on("click", function(){
    showModalTambahJenisKejahatan();
  });

});

function initDataTable(){
  $("#table-list-jenis-kejahatan").DataTable();
}

function showModalTambahJenisKejahatan(){
  $("#modalTambahJenisKejahatan").iziModal({
    title: "Tambah Kategori Jenis Kejahatan",
    subtitle: "Silahkan lengkapi form dibawah ini.",
    headerColor: "rgb(135, 46, 249)"
  });

  $("#modalTambahJenisKejahatan").iziModal("open");
}
