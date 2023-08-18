<?php

$scoreBoard = new ScoreBoard();

$homeTeam = new HomeTeam();
$awayTeam = new AwayTeam();

//The boards support the following operations:

$gameId = $scoreBoard->startGame($homeTeam, $awayTeam); //Start a game. When a game starts, it should capture (being initial score 0-0)


$homeTeamScore = 0;
$awayTeamScore = 0;
$scoreBoard->updateScore($gameId, $homeTeamScore, $awayTeamScore); //Update score. Receiving the pair score; home team score and away team score updates a game score

$scoreBoard->finishGame($gameId); //Finish a game. It will remove a match from the scoreboard

$summary = $scoreBoard->summaryOfGamesByTotalScore(); //Get a summary of games by total score. Those games with the same total score will be returned ordered by the most recently added to our system.


//scoreBoard will offer a facade in order to make easy for end user (which is a developer) to use library.

//game will be able to start and end by itself

//Does Game should be able to report his state?
//Game view can be different model it's allow to postpone decision.