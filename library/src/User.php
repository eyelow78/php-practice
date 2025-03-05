<?php

namespace User;

use Book\Book;

class User
{
    private string $name;
    private int $userID;
    private array $borrowedBooks;
    private int $penalty;

    public function __construct(string $name, int $userID)
    {
        $this->name = $name;
        $this->userID = $userID;
        $this->borrowedBooks = [];
        $this->penalty = 0;
    }

    public function borrowBook(Book $book): void
    {
        if ($book->isAvailable() && $this->penalty < 10) {
            $book->borrow();
            $this->penalty += 1;
            $this->borrowedBooks[] = $book;
            echo "Книга '{$book->getTitle()}' отдана пользователю {$this->getName()}" . PHP_EOL;
        } else {
            if ($this->penalty === 10) {
                echo "Вы не можете взять книгу т.к больше 10 иметь невозможно" . PHP_EOL;
            } else {
                echo "Книга '{$book->getTitle()}' недоступна" . PHP_EOL;
            }
        }
    }

    public function returnBook(Book $book): void
    {
        foreach ($this->borrowedBooks as $index => $currentBook) {
            if ($currentBook === $book) {
                unset($this->borrowedBooks[$index]);
                $book->returnBook();
                $this->penalty -= 1;
                echo "Книга '{$book->getTitle()}' успешно возвращена в библиотеку пользователем {$this->getName()}!" . PHP_EOL;
                return;
            }
        }
    }

    public function getPenalty(): int
    {
        return $this->penalty;
    }

    public function getID(): int
    {
        return $this->userID;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
