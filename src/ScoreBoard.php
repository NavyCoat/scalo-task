<?php

class ScoreBoard
{
    private $games = [];

    public function __construct()
    {
    }

    public function startGame(HomeTeam $homeTeam, AwayTeam $awayTeam): string
    {
        $gameId = uniqid();
        $game = new Game($gameId, $homeTeam, $awayTeam);
        $this->games[$gameId] = $game;

        return $gameId;
    }
}