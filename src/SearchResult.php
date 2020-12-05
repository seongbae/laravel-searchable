<?php

namespace Spatie\Searchable;

use Carbon\Carbon;

class SearchResult
{
    /** @var \Spatie\Searchable\Searchable */
    public $searchable;

    /** @var string */
    public $title;

    /** @var null|string */
    public $url;

    /** @var string */
    public $type;

    /** @var string */
    public $description;

    /** @carbon date */
    public $created;

    public function __construct(Searchable $searchable, string $title, ?string $url = null, ?string $description = null, ?string $created)
    {
        $this->searchable = $searchable;

        $this->title = $title;

        $this->url = $url;

        $this->description = $description;

        $this->created = $created;

    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
