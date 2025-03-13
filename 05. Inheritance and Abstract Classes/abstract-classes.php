<?php

namespace Lesson05\Inheritance2;

abstract class Achievement
{
    public function __construct(
        public string $name,
        public string $description,
        public string $icon,
    ) {}

    abstract public function qualifier(): bool;
}

class FirstPostAchievement extends Achievement
{
    public function qualifier(): bool
    {
        // TODO: Implement qualifier() method.
        return true;
    }
}

class HundredPostsAchievement extends Achievement
{
    public function qualifier(): bool
    {
        // TODO: Implement qualifier() method.
        return false;
    }
}

$achievement = new FirstPostAchievement(
    'First Post',
    'Write your first post',
    'first-post.svg',
);
echo $achievement->qualifier() ? "Got it!\n" : "May be next time you'll have more luck\n";

$achievement = new HundredPostsAchievement(
    'Hundred Posts',
    'Write hundred posts',
    'hundred-posts.svg',
);
echo $achievement->qualifier() ? "Wow! Hundred posts!\n" : "Write more!\n";
