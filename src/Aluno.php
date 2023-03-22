<?php
class Aluno
{
    public static int $registro = 0;
    private string $nome;
    private string $dataNascimento;
    private string $dataMatricula;
    private string $status;
    private string $dataStatus;

    public function __construct(string $nome, string $dataNascimento, string $dataMatricula)
    {
        Aluno::$registro += 1;
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->dataMatricula = $dataMatricula;
    }

    public function getRegistro(): int
    {
        return Aluno::$registro;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDataNascimento(): string
    {
        return $this->dataNascimento;
    }

    public function getDataMatricula(): string
    {
        return $this->dataMatricula;
    }

    public function getStatus(): string
    {
        return "{$this->status} em {$this->dataStatus}";
    }

    public function defineStatus(string $status, string $dataStatus): void
    {
        if (!($status == "ativo" or $status == "trancado" or $status == "suspenso" or $status == "expulso" or $status == "concluido")) {
            echo "Status Inválido";
            return;
        }

        $this->status = $status;
        $this->dataStatus = $dataStatus;
    }


}