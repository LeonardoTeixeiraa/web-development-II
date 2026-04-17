<?php 
//Recebe o id da requisição HTTP
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];

//Receber os dados atuais da base de dados
$tarefas = json_decode(file_get_contents('../tarefas.json'), true);

//remover a tarefa do array sobrescrevendo
$tarefas = array_filter($tarefas, fn($t) => $t['id'] !== $id);

file_put_contents('../tarefas.json', json_encode($tarefas, JSON_PRETTY_PRINT));

echo json_encode(['ok' => true]);
?>