<?php

namespace H34\Core\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryContract {
    public static function getAll(array $filters=[]): array|Collection;
    public static function getOne(int|string $id): Model;
}
