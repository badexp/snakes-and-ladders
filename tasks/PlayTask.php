<?php
/**
 * Play the game
 */

use Phalcon\Cli\Task;

class PlayTask extends Task
{
    /**
     * Default action for the play task
     *
     * @param array $params
     * Array of action params
     */
    public function mainAction(array $params)
    {
        $game = new Game();
        print(PHP_EOL.'Game was started'.PHP_EOL);
        while(!$game->isFinished())
        {
            $game->move(rand(1, 6));
            print($game->getLastMove().' - '.$game->getCurrentFieldType().$game->getCurrentProgress().PHP_EOL);
        }
        print(PHP_EOL.'Game was ended'.PHP_EOL);
    }
}