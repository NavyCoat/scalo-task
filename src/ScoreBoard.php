<?php

final class ScoreBoard
{
    /**
     * @var Game[]
     */
    private array $games = [];

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

    public function updateScore(string $gameId, int $homeTeamScore, int $awayTeamScore): void
    {
        $this->games[$gameId]->updateScore($homeTeamScore, $awayTeamScore);
    }

    public function finishGame(string $gameId): void
    {
        unset($this->games[$gameId]);
    }

    public function summaryOfGamesByTotalScore(): SummaryOfGamesByTotalScore
    {
        $summary = [];
        foreach ($this->games as $game) {
            $gameView = $game->getGameView();
            $summary[] = $gameView;
        }

        return new SummaryOfGamesByTotalScore($summary);
    }
}