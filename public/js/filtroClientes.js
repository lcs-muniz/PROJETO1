// public/js/filtroClientes.js

function filtrarClientes() {
    const input = document.getElementById("filtroClientes");
    const filter = input.value.toLowerCase();
    const table = document.getElementById("tabelaClientes");
    const tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {  // Começa em 1 para ignorar o cabeçalho
        const tdNome = tr[i].getElementsByTagName("td")[0];  // Nome na primeira coluna
        if (tdNome) {
            const txtValue = tdNome.textContent || tdNome.innerText;
            tr[i].style.display = txtValue.toLowerCase().indexOf(filter) > -1 ? "" : "none";
        }
    }
}
