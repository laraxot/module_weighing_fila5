<?php

declare(strict_types=1);

namespace Modules\Job\Models\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Job\Models\Schedule;

trait ScheduleHistoryRelations
{
<<<<<<< HEAD
<<<<<<< .merge_file_PEapJN
=======
    /**
     * @phpstan-return BelongsTo<Schedule, $this>
     */
<<<<<<< .merge_file_13P80s
>>>>>>> .merge_file_zBMS6L
=======
    /**
     * @phpstan-return BelongsTo<Schedule, $this>
     */
>>>>>>> laraxot/dev
    function command(): BelongsTo
        {
            return $this->belongsTo(Schedule::class, 'schedule_id', 'id');
        }

=======
    public function command(): BelongsTo
    {
        return $this->belongsTo(Schedule::class, 'schedule_id', 'id');
    }
>>>>>>> .merge_file_Lw3wUn
}
