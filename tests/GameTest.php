<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 15.03.19
 * Time: 21:01
 */

use PHPUnit\Framework\TestCase;

final class GameTest extends TestCase
{
    public function testCanMove(): void
    {
        $game = new Game();
        $game->move(5);
        $this->assertEquals(
            $game->getCurrentProgress(),
            6
        );
    }
}

