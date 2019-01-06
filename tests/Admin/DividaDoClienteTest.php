<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class DividaDoClienteTest extends TestCase
{
    public function test_salvar_nova_divida_do_cliente_e_verificar_se_existe_no_banco_de_dados_e_verificar_se_propriedades_estao_corretas()
    {
        $cliente = new \App\Cliente;
        $cliente->nome = 'Érick';
        $cliente->sobrenome = 'Firmo';
        $cliente->nascimento = '2019-01-29';
        $cliente->sexo = 'M';
        $cliente->rg = '1212';
        $cliente->cpf = '1212';
        $cliente->save();

        $divida = new \App\Divida;
        $divida->valor = '2000.00';
        $divida->vencimento = '2019-12-01';
        $divida->save();

        $divida_do_cliente = new \App\DividaDoCliente;
        $divida_do_cliente->cliente_id = '2';
        $divida_do_cliente->divida_id = '1';
        $divida_do_cliente->save();
        $register = (new \Core\Model())->seeInDatabase('dividas_dos_clientes',[
            'divida_id' => '1',
            'cliente_id' => '2',
        ]);
        $this->assertEquals('2', $register->cliente_id);
        $this->assertEquals('1', $register->divida_id);
    }

    public function test_excluir_divida_do_cliente_e_verificar_se_ainda_existe_no_banco_de_dados()
    {
        $divida_do_cliente = (new \App\DividaDoCliente())->delete(1);
        $register = (new \Core\Model())->seeInDatabase('dividas_dos_clientes',[
            'divida_id' => '1',
            'cliente_id' => '2',
        ]);
        $this->assertEquals('NULL', gettype($register));
    }
}

