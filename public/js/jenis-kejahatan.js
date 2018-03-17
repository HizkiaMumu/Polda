$(document).ready(function(){

  initDataTable();

  console.log($("#icon_jenis_kejahatan").val());

  $("#tombolTambahKategori").on("click", function(){
    showModalTambahJenisKejahatan();
  });

  $(".tombolOpenSubKategori").on("click", function(){
    $("#modalSubJenisKejahatan").iziModal("destroy");
    var idJenisKejahatan = $(this).children(".idJenisKejahatan").val();
    showModalSubJenisKejahatan(idJenisKejahatan);
  });

  $("input:file").change(function(){
    console.log('testing123...');
  });

});

function initDataTable(){
  $("#table-list-jenis-kejahatan").DataTable();
}

function showModalTambahJenisKejahatan(){
  $("#modalTambahJenisKejahatan").iziModal({
    title: "Tambah Kategori Jenis Kejahatan",
    subtitle: "Silahkan lengkapi form dibawah ini.",
    headerColor: "#5a70c6",
    fullscreen: true,
  });

  $("#modalTambahJenisKejahatan").iziModal("open");
}

function showModalSubJenisKejahatan(idJenisKejahatan){
  $.ajax({
    method: "GET",
    url: "/get/jenis-kejahatan/" + idJenisKejahatan + "/detail/"
  }).done(function(res){
    console.log(res);
    $("#modalSubJenisKejahatan").iziModal({
      title: "Sub Jenis Kejahatan",
      subtitle: "Berikut adalah Sub jenis kejahatan dari Jenis kejahatan " + res.nama_jenis_kejahatan,
      width: 800,
      headerColor: "#5a70c6",
      fullscreen: true
    });
    $("#modalSubJenisKejahatan").iziModal("open");
    loopSubJenisKejahatanOnModal(res.sub_jenis);
  });
}

function loopSubJenisKejahatanOnModal(data){
  for (var i = 0; i < data.length; i++) {
    console.log(data[i]);
    var content = "<tr><td>" + data[i].nama_sub_jenis_kejahatan + "</td><td>" + data[i].deskripsi + "</td><td><a href='/delete/sub-jenis-kejahatan/" + data[i].id + "' class='btn btn-danger waves-light waves-effect'> Delete </a> </td> </tr>"
    $("#dataSubJenisKejahatan").html(content);
  }
  if ($("#table-list-sub-jenis-kejahatan").hasClass("alreadyDataTable")) {
    console.log("already data table");
  } else {
    $("#table-list-sub-jenis-kejahatan").DataTable();
  }
}
