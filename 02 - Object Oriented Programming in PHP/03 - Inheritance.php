<?php


//Example 1 ==>
class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}

// "is a"
class SpecialityCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}

(new SpecialityCoffeeMaker())->brewLatte();


//Example 2 ==>
class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        // [100,200,300]
        return array_sum(array_column($this->items, $key));
    }
}

class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }

}

$videos = new VideosCollection([
        new Video('Some Video 1', 100),
        new Video('Some Video 2', 200),
        new Video('Some Video 3', 300)
]);

echo $videos->length();


// Example 3 ==>
class AchievementType
{
    public function name()
    {
        // Achievement Type
    }

    public function difficulty()
    {
        return 'intermediate';
    }

    public function icon()
    {

    }
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }

    public function name()
    {
        return 'Welcome Aboard!';
    }
}