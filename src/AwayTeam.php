<?php

final class AwayTeam
{
    public function __construct(public readonly string $name)
    {
        $this->assertNameIsProvided($this->name);
    }

    private function assertNameIsProvided(string $name): void
    {
        if (empty($name)) {
            throw new InvalidArgumentException('team name is required');
        }
    }
}