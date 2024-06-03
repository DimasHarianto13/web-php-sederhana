var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var mahasiswa = document.getElementById("mahasiswa");

keyword.addEventListener("keyup", function () {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      mahasiswa.innerHTML = xhr.responseText;
    }
  };

  xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
  xhr.send();
});
