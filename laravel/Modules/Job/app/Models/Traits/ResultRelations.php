<?php

declare(strict_types=1);

namespace Modules\Job\Models\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Job\Models\Task;

trait ResultRelations
{
<<<<<<< HEAD
<<<<<<< .merge_file_dNWMCf
=======
    /**
     * @phpstan-return BelongsTo<Task, $this>
     */
<<<<<<< .merge_file_utY9n9
>>>>>>> .merge_file_zBTNSh
=======
    /**
     * @phpstan-return BelongsTo<Task, $this>
     */
>>>>>>> laraxot/dev
    function task(): BelongsTo
        {
            return $this->belongsTo(Task::class);
        }

=======
    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
>>>>>>> .merge_file_YDgtIu
}
