<?php

declare(strict_types=1);

namespace Modules\Job\Models\Traits;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Job\Models\ScheduleHistory;

trait ScheduleRelations
{
<<<<<<< HEAD
<<<<<<< .merge_file_wgKafX
=======
    /**
     * @phpstan-return HasMany<ScheduleHistory, $this>
     */
<<<<<<< .merge_file_oEnufz
>>>>>>> .merge_file_6jJUoA
=======
    /**
     * @phpstan-return HasMany<ScheduleHistory, $this>
     */
>>>>>>> laraxot/dev
    function histories(): HasMany
        {
            return $this->hasMany(ScheduleHistory::class, 'schedule_id', 'id');
        }

=======
    public function histories(): HasMany
    {
        return $this->hasMany(ScheduleHistory::class, 'schedule_id', 'id');
    }
>>>>>>> .merge_file_muM06f
}
