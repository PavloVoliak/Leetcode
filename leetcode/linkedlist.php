<?php

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    // Додавання елемента в кінець списку
    public function insertAtEnd($data) {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
            return;
        }

        $current = $this->head;
        while ($current->next !== null) {
            $current = $current->next;
        }

        $current->next = $newNode;
    }

    // Виведення списку
    public function display() {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " ";
            $current = $current->next;
        }
        echo PHP_EOL; // Додає символ нового рядка в кінці виведення
    }
}

// Приклад використання:
$list = new LinkedList();
$list->insertAtEnd(1);
$list->insertAtEnd(2);
$list->insertAtEnd(3);
$list->display(); // Виведе: 1 2 3

?>
