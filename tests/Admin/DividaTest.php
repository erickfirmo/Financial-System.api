<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class DividaTest extends TestCase
{
    public function test_salvar_nova_divida_e_verificar_se_existe_no_banco_de_dados_e_verificar_se_propriedades_estao_corretas()
    {
        $divida = new \App\Divida;
        $divida->valor = '2000.00';
        $divida->vencimento = '2019-12-01';
        $divida->save();
        $register = (new \Core\Model())->seeInDatabase('dividas',[
            'valor' => '2000.00',
            'vencimento' => '2019-12-01',
        ]);
        $this->assertEquals('2000.00', $register->valor);
        $this->assertEquals('2019-12-01', $register->vencimento);
    }

    public function test_editar_divida_e_verificar_se_dados_foram_atualizados_corretamente()
    {
        $divida = (new \App\Divida())->find(2);
        $divida->update([
            'valor' => '3000.00',
            'vencimento' => '2020-12-01'
        ]);
        $register = (new \Core\Model())->seeInDatabase('dividas',[
            'valor' => '3000.00',
            'vencimento' => '2020-12-01'
        ]);
        $this->assertEquals('3000.00', $register->valor);
        $this->assertEquals('2020-12-01', $register->vencimento);
    }

    public function test_excluir_divida_e_verificar_se_ainda_existe_no_banco_de_dados()
    {
        $divida = (new \App\Divida())->delete(2);
        $register = (new \App\Divida())->find(2);
        $this->assertEquals('NULL', gettype($register));
    }
}

