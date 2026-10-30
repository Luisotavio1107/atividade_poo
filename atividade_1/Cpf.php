class Cliente {
    private $cpf;


    // Setter com a validação
    public function setCpf($cpf) {
        // Exemplo simples de validação (verifica se tem 11 dígitos)
        if (strlen($cpf) === 11) {
            $this->cpf = $cpf;
            echo "CPF cadastrado com sucesso!\n";
        } else {
            echo "Erro: CPF inválido! O CPF deve conter exatamente 11 dígitos.\n";
        }
    }


    public function getCpf() {
        return $this->cpf;
    }
}