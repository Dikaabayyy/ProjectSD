document.getElementById('toggleSidebarBtn').addEventListener('click', function() {
    document.getElementById('body').classList.toggle('toggle-sidebar')
});

document.getElementById('inputname').addEventListener('input', function(e) {
    var value = e.target.value;
    e.target.value = value.replace(/[0-9]/g, '');
});

document.getElementById('inputemail').addEventListener('input', function(e) {
    var value = e.target.value;
    e.target.value = value.replace(/[ ]/g, '');
});

function togglePassword(id) {
    const input = document.getElementById(id);
    if (input) {
        if (input.type === 'password') {
            input.type = 'text';
            event.target.textContent = 'Sembunyikan';
        } else {
            input.type = 'password';
            event.target.textContent = 'Lihat Password';
        }
    }
}

function search_guru() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('nama_guru');

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="table";
        }
    }
}

function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview');
        output.src = reader.result;
        output.style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
}
