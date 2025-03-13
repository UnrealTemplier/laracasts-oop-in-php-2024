<?php

namespace Lesson06\NotGood;

class Comment
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

class Post
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

class Thread
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
    public function handle($model): void
    {
        if ($model->isLiked()) {
            return;
        }

        $model->like();
    }
}