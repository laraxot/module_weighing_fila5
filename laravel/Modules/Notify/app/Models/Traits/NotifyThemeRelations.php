<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

trait NotifyThemeRelations
{
    /**
<<<<<<< .merge_file_75e9Pu
<<<<<<< HEAD
<<<<<<< HEAD
     * @return MorphTo<Media, static>
=======
     * @phpstan-return MorphTo<\Illuminate\Database\Eloquent\Model, $this>
>>>>>>> laraxot/dev
=======
     * @phpstan-return MorphTo<\Illuminate\Database\Eloquent\Model, $this>
>>>>>>> laraxot/dev
=======
     * @phpstan-return MorphTo<Model, $this>
>>>>>>> .merge_file_cxhX5l
     */
    public function linkable(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'post_type', 'post_id');
    }
}
