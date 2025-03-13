<?php

require 'vendor/autoload.php';

use User\User;
use Book\Book;
use Library\Library;

$library = new Library();

// Создаем книги
$book1 = new Book("1984", "George Orwell");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee");
$book3 = new Book("Blindness", "Jose Saramago");
$book4 = new Book("The Book of Disquiet", "Fernando Pessoa");
$book5 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
$book6 = new Book("The Brothers Karamazov", "Fyodor M. Dostoyevsky");
$book7 = new Book("Canterbury Tales", "Geoffrey Chaucer");
$book8 = new Book("The Castle", "Franz Kafka");
$book9 = new Book("Children of Gebelawi", "Naguib Mahfouz");
$book10 = new Book("Collected Fictions", "Jorge Luis Borges");
$book11 = new Book("Complete Poems", "Giacomo Leopardi");

// Добавляем книги в библиотеку
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// Создаем пользователей
$user1 = new User("Alice", 1);
$user2 = new User("Bob", 2);

// Регистрируем пользователей в библиотеке
$library->registerUser($user1);
$library->registerUser($user2);

// Пользователь Alice берет книгу
$user1->borrowBook($book1);

// Пользователь Bob пытается взять ту же книгу
$user2->borrowBook($book1);

// Пользователь Alice возвращает книгу
$user1->returnBook($book1);

// Пользователь Bob теперь может взять книгу
$user2->borrowBook($book1);

// Пользователь Bob возвращает книгу
$user2->returnBook($book1);

// Пользователь Alice берет несколько книг
$user1->borrowBook($book1);
$user1->borrowBook($book2);
$user1->borrowBook($book3);
$user1->borrowBook($book4);
$user1->borrowBook($book5);
$user1->borrowBook($book6);
$user1->borrowBook($book7);
$user1->borrowBook($book8);
$user1->borrowBook($book9);
$user1->borrowBook($book10);
$user1->borrowBook($book11);
// Последняя книга не возьмется т.к количество штрафных баллов (взятых книг) больше 10

// Штрафная система: за каждую взятую книгу начисляется 1 штрафной балл, а за каждый возврат книги вычетается 1 балл, максимум можно иметь 10 баллов
// если количество баллов макисмальное, то книги больше брать нельзя, пока не сдашь старую

// Поиск книги по названию
print_r($library->findBookByTitle("1984"));

// Поиск пользователя по ID
print_r($library->findUserById(1));