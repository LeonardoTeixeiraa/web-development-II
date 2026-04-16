<?php 
//Receber os dados da tarefa 
$data = json_decode(file_get_contents('php://input'), true);
//Receber o id da tarefa
$id = $data['id'];

//Receber os dados da base de dados
$tarefas = json_decode(file_get_contents('../tarefas.json'), true) ?? [];

//Percorre o array para atualizar o status da tarefa
foreach ($tarefas as &$t){
    if ($t['id'] === $id) {
        $t['status'] = 'concluído';
    }
}

//salva o arquivo
file_put_contents('../tarefas.json', $json_encode($tarefas, JSON_PRETTY_PRINT));

//Retorna uma resposta ao JS
echo json_encode(['ok' => true]);
?>