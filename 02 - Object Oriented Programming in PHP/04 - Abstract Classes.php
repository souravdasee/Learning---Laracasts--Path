<?php

// abstract class
abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    // abstract method
    abstract public function qualifier($user);
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }
}

class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {

    }
}

$achievement = new ReachTop50();

echo $achievement->qualifier('user');