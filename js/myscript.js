function kosongAll() {
  let frm = window.document.getElementById("formulir");
  frm.a1.value = "";
  frm.a2.value = "";
  frm.hasil.value = "";
}

function tambah() {
  let frm = window.document.getElementById("formulir");
  let angka1 = parseFloat(frm.a1.value);
  let angka2 = parseFloat(frm.a2.value);
  //inputan salah
  if (isNaN(angka1) || angka2 == "") {
    alert("Data tidak boleh kosong dan harus berupa angka");
  } else if (isNaN(angka2) || angka2 == "") {
    alert("Data tidak boleh kosong dan harus berupa angka");
  } else {
    let total = angka1 + angka2;
    frm.hasil.value = total;
  }
}

function kurang() {
  let frm = window.document.getElementById("formulir");
  let angka1 = parseFloat(frm.a1.value);
  let angka2 = parseFloat(frm.a2.value);
  //inputan salah
  if (isNaN(angka1) || angka2 == "") {
    alert("Data tidak boleh kosong dan harus berupa angka");
  } else if (isNaN(angka2) || angka2 == "") {
    alert("Data tidak boleh kosong dan harus berupa angka");
  } else {
    let total = angka1 - angka2;
    frm.hasil.value = total;
  }
}

function bagi() {
  let frm = window.document.getElementById("formulir");
  let angka1 = parseFloat(frm.a1.value);
  let angka2 = parseFloat(frm.a2.value);
  //inputan salah
  if (isNaN(angka1) || angka2 == "") {
    alert("Data tidak boleh kosong dan harus berupa angka");
  } else if (isNaN(angka2) || angka2 == "") {
    alert("Data tidak boleh kosong dan harus berupa angka");
  } else {
    let total = angka1 / angka2;
    frm.hasil.value = total;
  }
}

function kali() {
  let frm = window.document.getElementById("formulir");
  let angka1 = parseFloat(frm.a1.value);
  let angka2 = parseFloat(frm.a2.value);
  //inputan salah
  if (isNaN(angka1) || angka2 == "") {
    alert("Data tidak boleh kosong dan harus berupa angka");
  } else if (isNaN(angka2) || angka2 == "") {
    alert("Data tidak boleh kosong dan harus berupa angka");
  } else {
    let total = angka1 * angka2;
    frm.hasil.value = total;
  }
}

function pangkat() {
  let frm = window.document.getElementById("formulir");
  let angka1 = parseFloat(frm.a1.value);
  let angka2 = parseFloat(frm.a2.value);
  //inputan salah
  if (isNaN(angka1) || angka2 == "") {
    alert("Data tidak boleh kosong dan harus berupa angka");
  } else if (isNaN(angka2) || angka2 == "") {
    alert("Data tidak boleh kosong dan harus berupa angka");
  } else {
    let total = angka1 ** angka2;
    frm.hasil.value = total;
  }
}
