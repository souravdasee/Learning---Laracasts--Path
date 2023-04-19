<?php

class TeamException extends Exception
{
    public static function fromTooManyMembers()
    {
        return new static('You can not add more than 3 team members.');
    }
}

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        if (count($this->members) === 3) {
            throw TeamException::fromTooManyMembers();
        }
        $this->members[] = $member;
    }

    public function members()
    {
        return $this->members;
    }
}


class TeamMembersController
{
    public function store()
    {
        $team = new Team; // has a maximum of three members.

        try {
            $team->add(new Member('John Doe'));
            $team->add(new Member('Jane Doe'));
            $team->add(new Member('Max Doe'));
            $team->add(new Member('Kale Doe'));

            var_dump($team->members());
        } catch (TeamException $e) {
            var_dump($e);
        } catch (Exception $exception) {
            var_dump($exception);
        }
    }
}

(new TeamMembersController())->store();