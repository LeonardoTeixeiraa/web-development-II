<?php
$caminho = __DIR__ . '/../tarefas.json';

//lê o corpo da requisição HTTP e faz o decode para um array php
$data = json_decode(file_get_contents("php://input"), true);

var_dump($data);
exit;

//Lê o titulo da tarefa armazenada em $data
$titulo = $data['titulo'] ?? '';

//Verifica a existência de um título
if (!$titulo) {
    //Retorna erro para o JS com mensagem
    echo json_encode(['erro' => 'Título obrigatório']);
    exit;
}

//Lê todas as tarefas já salvas no arquivo json
$tarefas = json_decode(file_get_contents($caminho), true) ?? [];

//Instânciação de um novo objeto tarefa
$nova = [
    'id' => uniqid(),
    'titulo' => $titulo,
    'status' => 'pendente'
];

// Adiciona a nova tarefa ao array de tarefa
$tarefas[] = $nova;

//Salva as tarefas no arquivo tarefas.json
file_put_contents($caminho, json_encode($tarefas, JSON_PRETTY_PRINT));

//Retorna a nova tarefa para o JS
echo json_encode($nova);
?>