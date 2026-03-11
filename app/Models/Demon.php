<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demon extends Model
{
    /**
     * DEMON ATTRIBUTES
     * $this->attributes['id'] - int - contains the demon primary key (id)
     * $this->attributes['name'] - string - contains the demon's name
     * $this->attributes['blood_level'] - int - contains the demon's blood level
     * $this->attributes['hierarchy'] - string - contains the demon's hierarchy level
     * $this->attributes['created_at'] - timestamp - contains the creation date
     * $this->attributes['updated_at'] - timestamp - contains the last update date
    */

    protected $fillable = ['name','blood_level','hierarchy'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id) : void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name) : void
    {
        $this->attributes['name'] = $name;
    }

    public function getBloodLevel(): int
    {
        return $this->attributes['blood_level'];
    }

    public function setBloodLevel(int $blood_level ) : void
    {
        $this->attributes['blood_level'] = $blood_level;
    }

    public function getHierarchy(): string
    {
        return $this->attributes['hierarchy'];
    }

    public function setHierarchy(string $hierarchy): void
    {
        $this->attributes['hierarchy'] = $hierarchy;
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }

    public function getDisplayName(): string
    {
        $name = $this->getName();
        if ($this->getHierarchy() === 'luna') {
            return $name . ' (Concentra tu respiración)';
        }
        return $name;
    }

    public function getDisplayBloodLevel(): int
    {
        $bloodLevel = $this->getBloodLevel();
        if ($this->getHierarchy() === 'rey') {
            return $bloodLevel * 2;
        }
        return $bloodLevel;
    }


}
