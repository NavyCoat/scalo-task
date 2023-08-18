<?php

final class SummaryOfGamesByTotalScore implements IteratorAggregate
{
    private array $games = [];

    public function __construct(array $games)
    {
        $this->assertEmptyOrArrayOfGames($games);
        $this->games = $games;
    }

    /**
     * @return Traversable|GameView[]
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->games);
    }

    private function assertEmptyOrArrayOfGames(array $games): void
    {
        if (empty($games)) {
            return;
        }

        foreach ($games as $game) {
            if (!$game instanceof GameView) {
                throw new InvalidArgumentException('Not an array of Game Views');
            }
        }
    }
}