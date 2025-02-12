<?php

namespace Cnab;

class Banco
{
    const BANCO_DO_BRASIL = 1;
    const SANTANDER = 33;
    const CEF = 104;
    const BRADESCO = 237;
    const ITAU = 341;
    const SICOOB = 756;
    const BANRISUL = 41;
    const SICREDI = 748;
    const UNIPRIME = 84;
    const CECRED = 85;
    const CRESOL = 133;
    const SAFRA = 422;

    public static function getBanco($codigo)
    {
        if ($codigo == self::BANCO_DO_BRASIL) {
            return array(
                'codigo_do_banco' => self::BANCO_DO_BRASIL,
                'nome_do_banco' => 'BANCO DO BRASIL S.A.',
            );
        } elseif ($codigo == self::ITAU) {
            return array(
                'codigo_do_banco' => self::ITAU,
                'nome_do_banco' => 'BANCO ITAU SA',
            );
        } elseif ($codigo == self::CEF) {
            return array(
                'codigo_do_banco' => self::CEF,
                'nome_do_banco' => 'CAIXA ECONOMICA FEDERAL',
            );
        } elseif ($codigo == self::SANTANDER) {
            return array(
                'codigo_do_banco' => self::SANTANDER,
                'nome_do_banco' => 'BANCO SANTANDER (BRASIL) S/A',
            );
        } elseif ($codigo == self::BRADESCO) {
            return array(
                'codigo_do_banco' => self::BRADESCO,
                'nome_do_banco' => 'BRADESCO',
            );
        } elseif ($codigo == self::SICOOB) {
            return array(
                'codigo_do_banco' => self::SICOOB,
                'nome_do_banco' => 'SICOOB',
            );
        } elseif ($codigo == self::BANRISUL) {
            return array(
                'codigo_do_banco' => self::BANRISUL,
                'nome_do_banco' => 'BANRISUL',
            );
        } elseif ($codigo == self::SICREDI) {
            return array(
                'codigo_do_banco' => self::SICREDI,
                'nome_do_banco' => 'SICREDI',
            );
        } elseif ($codigo == self::UNIPRIME) {
            return array(
                'codigo_do_banco' => self::UNIPRIME,
                'nome_do_banco' => 'UNIPRIME',
            );
        } elseif ($codigo == self::CECRED) {
            return array(
                'codigo_do_banco' => self::CECRED,
                'nome_do_banco' => 'CECRED',
            );
        } elseif ($codigo == self::CRESOL) {
            return array(
                'codigo_do_banco' => self::CRESOL,
                'nome_do_banco' => 'CRESOL',
            );
        } elseif ($codigo == self::SAFRA) {
            return array(
                'codigo_do_banco' => self::SAFRA,
                'nome_do_banco' => 'SAFRA',
            );
        } else {
            return false;
        }
    }

    public static function existBanco($codigo_banco)
    {
        $banco = self::getBanco($codigo_banco);

        return $banco ? true : false;
    }
}

