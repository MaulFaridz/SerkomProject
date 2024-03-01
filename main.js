// function untuk melekasanakan perintah perhitungan total 
function hitungTotal() {
    var tipeKamar = document.getElementById("tipeKamar").value;
    var durasiMenginap = parseInt(document.getElementById("durasiMenginap").value);
    var includeBreakfast = document.getElementById("includeBreakfast").value;
    var roomPrice = 0;
  
    switch (tipeKamar) {
      case "standard":
        roomPrice = 1000000;
        break;
      case "deluxe":
        roomPrice = 2000000;
        break;
      case "family":
        roomPrice = 3000000;
        break;
    }
  


    var total = roomPrice * durasiMenginap;
    if (durasiMenginap > 3) {
      total *= 0.9; // diskon 10% untuk durasi lebih dari 3 hari
    }
    if (includeBreakfast === "yes") {
      total += 80000; // tambahan harga includeBreakfast
    }
    console.log(total);
    document.getElementById("totalBayar").value = "Rp " + total.toLocaleString();
    document.getElementById("totalbayarValue").value = total;
  }

    function formatRupiah(angka, prefix) {
      var number_string = angka.toString().replace(/[^,\d]/g, ""),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
      return prefix == undefined ? rupiah : rupiah ? prefix + " " + rupiah : "";
    }

