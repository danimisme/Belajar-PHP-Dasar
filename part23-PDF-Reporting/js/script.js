$(document).ready(function () {
  //hilangkan tombol cari
  $("#tombol-cari").hide();

  //event ketika keyword seach diketik
  $("#keyword").on("keyup", function () {
    // munculkan icon loading
    $(".loader").show();

    // ajax menggunakan load
    // $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());

    // ajax menggunakan $.get()

    $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
      setTimeout(() => {
        $(".loader").hide();
      }, 1500);
    });
  });
});
