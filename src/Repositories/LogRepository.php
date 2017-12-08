<?php

namespace Topoff\Tracker\Repositories;

use Topoff\Tracker\Models\Log;
use Topoff\Tracker\Models\Session;
use Topoff\Tracker\Models\Uri;

class LogRepository
{
    /**
     * Finds an existing Log (Request) or creates a new DB Record
     *
     * @param Session $session
     * @param Uri     $uri
     *
     * @return mixed
     */
    public function findOrCreate(Session $session, Uri $uri)
    {
        return Log::create(['session_id' => $session->id ?? NULL, 'uri_id' => $uri->id]);
    }
}