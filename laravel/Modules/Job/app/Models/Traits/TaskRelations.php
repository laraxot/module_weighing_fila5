<?php

declare(strict_types=1);

namespace Modules\Job\Models\Traits;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Job\Models\Frequency;
use Modules\Job\Models\Result;

trait TaskRelations
{
    /**
<<<<<<< HEAD
<<<<<<< .merge_file_1tBgJ9
     * @phpstan-return HasMany<Frequency, static>
=======
     * @phpstan-return HasMany<Frequency, $this>
>>>>>>> .merge_file_0auQBI
=======
     * @phpstan-return HasMany<Frequency, $this>
>>>>>>> laraxot/dev
     */
    public function frequencies(): HasMany
    {
        return $this->hasMany(Frequency::class, 'task_id', 'id')->with('parameters');
    }

    /**
<<<<<<< HEAD
<<<<<<< .merge_file_1tBgJ9
     * @phpstan-return HasMany<Result, static>
=======
     * @phpstan-return HasMany<Result, $this>
>>>>>>> .merge_file_0auQBI
=======
     * @phpstan-return HasMany<Result, $this>
>>>>>>> laraxot/dev
     */
    public function results(): HasMany
    {
        return $this->hasMany(Result::class, 'task_id', 'id');
    }
}
