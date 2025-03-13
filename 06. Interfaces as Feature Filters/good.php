<?php

namespace Lesson06\Good;

interface CanBeLikedInterface
{
    public function like(): void;

    public function isLiked(): bool;
}

class Comment implements CanBeLikedInterface
{
    public function like(): void
    {
        echo 'Comment liked' . PHP_EOL;
    }

    public function isLiked(): bool
    {
        return false;
    }
}

class Post implements CanBeLikedInterface
{
    public function like(): void
    {
        echo 'Post liked' . PHP_EOL;
    }

    public function isLiked(): bool
    {
        return false;
    }
}

class Thread implements CanBeLikedInterface
{
    public function like(): void
    {
        echo 'Thread liked' . PHP_EOL;
    }

    public function isLiked(): bool
    {
        return false;
    }
}

class PerformLikeAction
{
    public function handle(CanBeLikedInterface $model): void
    {
        if ($model->isLiked()) {
            return;
        }

        $model->like();
    }
}