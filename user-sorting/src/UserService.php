<?php

namespace UserService;

use User\User;

class UserService
{

    private array $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function sortByUsername(bool $ascending): array
    {
        usort($this->users, function (User $firstUser, User $secondUser) use ($ascending): int 
        {
            if ($ascending) {
                return strcmp($firstUser->getUsername(), $secondUser->getUsername());
            } else {
                return strcmp($secondUser->getUsername(), $firstUser->getUsername());
            }
        });
        return $this->users;
    }

    public function sortByBirthday(bool $ascending): array
    {
        usort($this->users, function (User $firstUser, User $secondUser) use ($ascending): int 
        {
            if ($ascending) {
                return $firstUser->getBirthday() <=> $secondUser->getBirthday();
            } else {
                return $secondUser->getBirthday() <=> $firstUser->getBirthday();
            }
        });
        return $this->users;
    }
}
