<?php

declare(strict_types=1);

namespace Modules\Job\Models\Traits;

<<<<<<< HEAD
<<<<<<< .merge_file_MFmkF4
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Modules\Job\Database\Factories\ParameterFactory;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Job\Models\Frequency;

trait ParameterRelations
{
=======
=======
>>>>>>> laraxot/dev
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Job\Models\Frequency;

trait ParameterRelations
{
    /**
     * @phpstan-return BelongsTo<Frequency, $this>
     */
<<<<<<< .merge_file_2H3z7P
<<<<<<< HEAD
>>>>>>> .merge_file_fL1HNH
=======
>>>>>>> laraxot/dev
    function task(): BelongsTo
        {
            return $this->belongsTo(Frequency::class);
        }

=======
    public function task(): BelongsTo
    {
        return $this->belongsTo(Frequency::class);
    }
>>>>>>> .merge_file_apsgkQ
}
