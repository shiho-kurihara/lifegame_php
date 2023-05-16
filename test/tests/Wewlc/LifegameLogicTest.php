<?php
namespace Wewlc;

use PHPUnit\Framework\TestCase;
require __DIR__ . '/../../src/html/lifegame_logic.php';

class LifegameLogicTest extends TestCase
{
    /**
     * @test
     * @small
     * @group characterization
     */
    public function 初期表示(): void
    {
        list($g, $board, $s) = run_lifegame(null,null);
        $this->assertSame([
            ["□", "□", "□", "□", "□"],
            ["□", "□", "□", "□", "□"],
            ["□", "■", "■", "■", "□"],
            ["□", "□", "□", "□", "□"],
            ["□", "□", "□", "□", "□"],
        ], $board);
    }

    /**
     * @test
     * @small
     * @group characterization
     */
    public function test_2回目の表示(): void
    {
        $prev = '00000900000901110900000900000';
        $g = 2;
        list($g, $board, $s) = run_lifegame($prev,$g);
        $this->assertSame([
            ["□", "□", "□", "□", "□"],
            ["□", "□", "■", "□", "□"],
            ["□", "□", "■", "□", "□"],
            ["□", "□", "■", "□", "□"],
            ["□", "□", "□", "□", "□"],
        ], $board);
    }

}
