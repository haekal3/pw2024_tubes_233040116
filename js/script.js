const tombolCari = document.querySelector('.btn btn-primary');
const formControl = document.querySelector ('.form-control');
const tabel = document.querySelector ('.tabel');

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika kita menuliskan keyword
formControl.addEventListener('keyup', function() {
    // ajax

    // xmlhttprequest
    // const xhr = new XMLHttpRequest();

    // xhr.onreadystatechange = function() {
    //     if (xhr.readyState == 4 && xhr.status == 200) {
    //         tabel.innerHTML = xhr.responseText;
    //     }
    // };

    // xhr.open('get', 'ajax/ajax_cari.php?formControl=' + formControl.value);
    // xhr.send();

    // fetch()
    fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((response) => (tabel.innerHTML = response));
});