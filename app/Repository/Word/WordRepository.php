<?php

namespace App\Repository\Word;

use App\Models\Word;
use App\Repository\BaseRepository;
use Carbon\Carbon;

class WordRepository extends BaseRepository implements WordRepositoryInterface
{
    public function __construct(Word $word)
    {
        parent::__construct($word);
    }
}
