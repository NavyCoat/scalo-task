<?php

final class GameView
{
    public function __construct(
        public readonly string $homeTeamName,
        public readonly int $homeTeamScore,
        public readonly string $awayTeamName,
        public readonly int $awayTeamScore
    ) {
    }
}