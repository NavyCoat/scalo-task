<?php

final class Game
{

    private int $homeTeamScore = 0;
    private int $awayTeamScore = 0;

    private HomeTeam $homeTeam;
    private AwayTeam $awayTeam;

    private string $gameId;

    /**
     * @param string $gameId
     * @param HomeTeam $homeTeam
     * @param AwayTeam $awayTeam
     */
    public function __construct(string $gameId, \HomeTeam $homeTeam, \AwayTeam $awayTeam)
    {
        $this->gameId = $gameId;
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;
    }

    public function updateScore(int $homeTeamScore, int $awayTeamScore)
    {
        $this->homeTeamScore = $homeTeamScore;
        $this->awayTeamScore = $awayTeamScore;
    }

    /**
     * Created for the InMemory implementation ease
     * @return GameView
     */
    public function getGameView(): GameView
    {
        return new GameView(
            $this->homeTeam->name,
            $this->homeTeamScore,
            $this->awayTeam->name,
            $this->awayTeamScore
        );
    }
}