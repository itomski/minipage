<?php

namespace Entities;

use DateTime;

class Todo {

    protected $createdAt;
    protected $title;
    protected $description;

    function __construct($title, $description) 
    {
        $this->title = $title;
        $this->description = $description;
        $this->createdAt = new DateTime();
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
}