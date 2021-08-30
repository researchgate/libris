<?php

namespace LibRIS;

use PHPUnit\Framework\TestCase;

class RisWriterTest extends TestCase
{

    public function test_writeRecords_derik()
    {
        $rw = new RISWriter();
        $expected = <<<RESULTS
TY  - BOOK\r
ID  - 394\r
T1  - Narratology: Introduction to the Theory of Narrative\r
A1  - Bal,Mieke\r
PB  - University of Toronto Press\r
PY  - 1997/12/31/\r
SN  - 0802078060, 9780802078063\r
ER  - 
RESULTS;

        self::assertEquals(
            $expected,
            $rw->writeRecords([
                [
                    'TY' => ['BOOK'],
                    'ID' => ['394'],
                    'T1' => ['Narratology: Introduction to the Theory of Narrative'],
                    'A1' => ['Bal,Mieke'],
                    'PB' => ['University of Toronto Press'],
                    'PY' => ['1997/12/31/'],
                    'SN' => ['0802078060, 9780802078063'],
                ]
            ])
        );
    }
}
