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
        $params = [];
        list($g, $board, $s) = run_lifegame($params);
        $this->assertSame([
            ["□", "□", "□", "□", "□"],
            ["□", "□", "□", "□", "□"],
            ["□", "■", "■", "■", "□"],
            ["□", "□", "□", "□", "□"],
            ["□", "□", "□", "□", "□"],
        ], $board);
    }

}
