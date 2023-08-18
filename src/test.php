<?php
require __DIR__ . '/GameView.php';
require __DIR__ . '/HomeTeam.php';
require __DIR__ . '/AwayTeam.php';
require __DIR__ . '/Game.php';
require __DIR__ . '/SummaryOfGamesByTotalScore.php';
require __DIR__ . '/ScoreBoard.php';


$scoreBoard = new ScoreBoard();

$homeTeam = new HomeTeam('home team name');
$awayTeam = new AwayTeam('away team name');

//The boards support the following operations:
$gameId = $scoreBoard->startGame($homeTeam, $awayTeam); //Start a game. When a game starts, it should capture (being initial score 0-0)

$scoreBoard->updateScore($gameId, 1, 2); //Update score. Receiving the pair score; home team score and away team score updates a game score


$summary = $scoreBoard->summaryOfGamesByTotalScore(); //Get a summary of games by total score. Those games with the same total score will be returned ordered by the most recently added to our system.

foreach ($summary as $item) {
    echo $item->homeTeamName . ' ' . $item->homeTeamScore . ' - ' . $item->awayTeamScore . ' ' . $item->awayTeamName . PHP_EOL;
}

$scoreBoard->finishGame($gameId); //Finish a game. When a game is finished, it should be removed from the system.