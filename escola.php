<?php

require_once 'src/Aluno.php';

$primeiroAluno = new Aluno('Rogerio', '30/05/1993', '22/03/2023');

echo "Registro acadêmico: {$primeiroAluno->getRegistro()}" . PHP_EOL;
echo "Nome: {$primeiroAluno->getNome()}" . PHP_EOL;
echo "Data de nascimento: {$primeiroAluno->getDataNascimento()}" . PHP_EOL;
echo "Data de matricula: {$primeiroAluno->getDataMatricula()}" . PHP_EOL;

$primeiroAluno->defineStatus(status: 'concluido', dataStatus: '23/03/2023');

echo "Status: {$primeiroAluno->getStatus()}" . PHP_EOL;

echo PHP_EOL;

$segundoAluno = new Aluno('Priscilla', '10/06/1994', '03/01/2022');

echo "Registro acadêmico: {$segundoAluno->getRegistro()}" . PHP_EOL;
echo "Nome: {$segundoAluno->getNome()}" . PHP_EOL;
echo "Data de nascimento: {$segundoAluno->getDataNascimento()}" . PHP_EOL;
echo "Data de matricula: {$segundoAluno->getDataMatricula()}" . PHP_EOL;

$segundoAluno->defineStatus(status: 'trancado', dataStatus: '10/10/2022');
echo "Status: {$segundoAluno->getStatus()}" . PHP_EOL;



