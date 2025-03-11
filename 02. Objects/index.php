<?php

namespace Lesson02;

class Playlist
{
    public function __construct(public $name, public $songs) {}

    public function shuffle()
    {
        shuffle($this->songs);
    }
}

$playlists = [];

$playlists[] = new Playlist('90s Depression', [
    'My Heart Will Go On',
    'It\'s My Life',
    'I\'m a Scatman',
]);

$playlists[0]->shuffle();

print_r($playlists);