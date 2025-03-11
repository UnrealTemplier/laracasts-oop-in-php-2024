<?php

namespace Lesson03;

class Playlist
{
    /**
     * @param Song[] $songs
     */
    public function __construct(public string $name, public array $songs) {}

    public function name()
    {
        return $this->name;
    }

    public function songs()
    {
        return $this->songs;
    }
}

class Song
{
    public function __construct(public string $name, public string $artist) {}

    public function name()
    {
        return $this->name;
    }

    public function artist()
    {
        return $this->artist;
    }
}

$playlists = [];
$playlists[] = new Playlist('80s', [
    new Song('Jawbreaker', 'Judas Priest'),
    new Song('Heaven and Hell', 'Black Sabbath'),
]);

$playlists[1] = new Playlist('90s', [
    new Song('What Is Love', 'Haddaway'),
    new Song('Cambio Dolor', 'Natalia Oreiro'),
]);

print_r($playlists);
var_dump($playlists[0]->name());
var_dump($playlists[1]->name());
print_r($playlists[0]->songs());
print_r($playlists[1]->songs());
var_dump($playlists[0]->songs()[0]->artist());
var_dump($playlists[0]->songs()[1]->name());