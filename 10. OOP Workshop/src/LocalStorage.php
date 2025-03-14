<?php

namespace App;

class LocalStorage implements FileStorage
{
    protected string $root = __DIR__ . '/../storage';

    public function put($path, $content): void
    {
        $savePath = "{$this->root}/{$path}";

        if (!is_dir(dirname($savePath))) {
            mkdir(dirname($savePath), 0777, recursive: true);
        }

        file_put_contents($savePath, $content);
    }
}