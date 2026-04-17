async function adicionarTarefa() {
  const titulo = document.getElementById("titulo").value;

  const res = await fetch("api/adicionarTarefa.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ titulo }),
  });

  const data = await res.json();

  if (data.erro) {
    alert(data.erro);
    return;
  }

  renderTarefa(data);
}

async function deletarTarefa(id) {
  await fetch("api/deletarTarefa.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ id }),
  });

  document.getElementById(id).remove();
}

async function concluirTarefa(id) {
  await fetch("api/atualizarTarefa.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ id }),
  });

  const badge = document.querySelector(`#${id} .status`);
  badge.className = "badge bg-success status";
  badge.innerText = "concluído";
}
function renderTarefa(tarefa) {
  const lista = document.getElementById("lista");

  const tr = document.createElement("tr");
  tr.id = tarefa.id;

  tr.innerHTML = `
        <td>${tarefa.titulo}</td>
        <td><span class="badge bg-warning status">pendente</span></td>
        <td>
            <button class="btn btn-success btn-sm" onclick="concluirTarefa('${tarefa.id}')">✔</button>
            <button class="btn btn-danger btn-sm" onclick="deletarTarefa('${tarefa.id}')">✖</button>
        </td>
    `;

  lista.appendChild(tr);
}
