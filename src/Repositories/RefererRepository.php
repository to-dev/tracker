<?php

namespace Topoff\LaravelUserLogger\Repositories;

use Topoff\LaravelUserLogger\Models\Referer;

class RefererRepository
{
    /**
     * Finds an existing Referer or creates a new DB Record
     *
     * @param array $attributes
     *
     * @return mixed
     */
    public function findOrCreate(Array $attributes)
    {
        return Referer::firstOrCreate($attributes);
    }

    public function findOrCreateWithRelations(Array $attributes)
    {

    }
}