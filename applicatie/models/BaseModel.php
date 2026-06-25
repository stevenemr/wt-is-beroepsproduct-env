<?php

abstract class BaseModel
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Get all items of the model.
     */
    abstract public function all();
}
