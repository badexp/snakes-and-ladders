<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 15.03.19
 * Time: 20:22
 */

class Game
{
    private $currentField;
    private $currentProgress;
    private $lastMove;

    /**
     * Game constructor. Initializes all properties for new game;
     */
    function __construct()
    {
        $this->currentField = 1;
        $this->currentProgress = 1;
        $this->lastMove = 0;
    }

    /**
     * Is current game finished?
     * @return bool
     */
    function isFinished(): bool
    {
        return $this->currentProgress === 100;
    }

    /**
     * Do move with specified step count
     * @param $step
     */
    function move($step): void
    {
        $this->lastMove = $step;
        $this->currentField = $this->currentProgress + $step;
        $currentFieldType = $this->getCurrentFieldType();
        if ($currentFieldType === 'snake') {
            $this->currentProgress = $this->currentField - 3;
        } else if($currentFieldType === 'ladder') {
            $this->currentProgress = $this->currentField + 10;
        } else if ($this->currentField <= 100) {
            $this->currentProgress = $this->currentField;
        }
    }

    /**
     * @return int
     */
    function getLastMove(): int
    {
        return $this->lastMove;
    }

    /**
     * If we now on field which divides by 9 - it's snake
     * If we now on field which equals to 25 or 55 - it's ladder
     * @return string
     */
    function getCurrentFieldType(): string
    {
        $fieldType = '';
        if ($this->currentField % 9 === 0)
        {
            $fieldType = 'snake';
        }
        if ($this->currentField === 25 || $this->currentField === 55)
        {
            $fieldType = 'ladder';
        }
        return $fieldType;
    }

    /**
     * @return int
     */
    function getCurrentProgress(): int
    {
        return $this->currentProgress;
    }
}