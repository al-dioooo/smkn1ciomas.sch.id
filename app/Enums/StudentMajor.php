<?php

namespace App\Enums;

enum StudentMajor: string
{
    case PPLG = 'pplg';
    case ANM = 'anm';
    case BCF = 'bcf';
    case TPFL = 'tpfl';
    case TO = 'to';

    public function resolveName(): string
    {
        return match ($this) {
            StudentMajor::PPLG => 'Pemrograman Perangkat Lunak dan Gim',
            StudentMajor::ANM => 'Animasi',
            StudentMajor::BCF => 'Broadcasting dan Perfilman',
            StudentMajor::TPFL => 'Teknik Pengelasan dan Fabrikasi Logam',
            StudentMajor::TO => 'Teknik Otomotif'
        };
    }

    public function getClasses()
    {
        return match ($this) {
            StudentMajor::PPLG => [
                'X PPLG 1',
                'X PPLG 2',
                'X PPLG 3',
                'XI PPLG 1',
                'XI PPLG 2',
                'XI PPLG 3',
                'XII PPLG 1',
                'XII PPLG 2',
                'XII PPLG 3'
            ],
            StudentMajor::ANM => [
                'X ANM 1',
                'X ANM 2',
                'XI ANM 1',
                'XI ANM 2',
                'XII ANM 1',
                'XII ANM 2'
            ],
            StudentMajor::BCF => [
                'X BCF 1',
                'X BCF 2',
                'XI BCF 1',
                'XI BCF 2',
                'XII BCF 1',
                'XII BCF 2'
            ],
            StudentMajor::TPFL => [
                'X TPFL 1',
                'XI TPFL 1',
                'XII TPFL 1',
            ],
            StudentMajor::TO => [
                'X TO 1',
                'X TO 2',
                'XI TO 1',
                'XI TO 2',
                'XII TO 1',
                'XII TO 2'
            ]
        };
    }
}
