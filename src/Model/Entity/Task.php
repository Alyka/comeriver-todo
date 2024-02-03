<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Task extends Entity
{
    protected array $_accessible = [
        'title' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
    ];
}
