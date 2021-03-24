<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\CMS;

class CmsUserWithArticlesCountDTO
{
    public $user;
    public $count;

    public function __construct(CmsUser $user)
    {
        $this->user = $user;
    }
}
