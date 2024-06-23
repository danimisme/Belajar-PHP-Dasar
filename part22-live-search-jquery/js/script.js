$(document).ready(function () {
  //event ketika keyword seach diketik
  $("#keyword").on("keyup", function () {
    $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());
  });
});
