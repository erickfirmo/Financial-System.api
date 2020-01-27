<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase
{
    public function test_salvar_novo_cliente_e_verificar_se_existe_no_banco_de_dados_e_verificar_se_propriedades_estao_corretas()
    {
        $cliente = new \App\Cliente;
        $cliente->nome = 'Érick';
        $cliente->sobrenome = 'Firmo';
        $cliente->nascimento = '2019-01-29';
        $cliente->sexo = 'M';
        $cliente->rg = '8080';
        $cliente->cpf = '8080';
        $cliente->save();
        $register = (new \ErickFirmo\Model())->seeInDatabase('clientes',[
            'nome' => 'Érick',
            'sobrenome' => 'Firmo',
            'nascimento' => '2019-01-29',
            'sexo' => 'M',
            'rg' => '8080',
            'cpf' => '8080',
        ]);
        $this->assertEquals('Érick', $register->nome);
        $this->assertEquals('Firmo', $register->sobrenome);
        $this->assertEquals('2019-01-29', $register->nascimento);
        $this->assertEquals('M', $register->sexo);
        $this->assertEquals('8080', $register->rg);
        $this->assertEquals('8080', $register->cpf);
    }

    public function test_editar_cliente_e_verificar_se_dados_foram_atualizados_corretamente()
    {
        $cliente = (new \App\Cliente())->find(1);
        $cliente->update([
            'nome' => 'erick',
            'sobrenome' => 'firmo',
            'nascimento' => '2019-01-01',
            'rg' => '07654321',
            'cpf' => '07654321',
            'sexo' => 'M'
        ]);
        $register = (new \ErickFirmo\Model())->seeInDatabase('clientes',[
            'nome' => 'erick',
            'sobrenome' => 'firmo',
            'nascimento' => '2019-01-01',
            'sexo' => 'M',
            'rg' => '07654321',
            'cpf' => '07654321',
        ]);
        $this->assertEquals('erick', $register->nome);
        $this->assertEquals('firmo', $register->sobrenome);
        $this->assertEquals('2019-01-01', $register->nascimento);
        $this->assertEquals('M', $register->sexo);
        $this->assertEquals('07654321', $register->rg);
        $this->assertEquals('07654321', $register->cpf);
    }

    public function test_excluir_cliente_e_verificar_se_ainda_existe_no_banco_de_dados()
    {
        $cliente = (new \App\Cliente())->delete(1);
        $register = (new \App\Cliente())->find(1);
        $this->assertEquals('NULL', gettype($register));
    }
}

