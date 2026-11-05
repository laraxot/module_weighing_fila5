<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Modules\Notify\Models\NotificationTemplate;

trait NotificationLogRelations
{
<<<<<<< HEAD
<<<<<<< HEAD
    function notifiable(): MorphTo
        {
            return $this->morphTo();
        }

    function template(): BelongsTo
        {
            return $this->belongsTo(NotificationTemplate::class, 'template_id');
        }
=======
=======
>>>>>>> laraxot/dev
    /**
     * @phpstan-return MorphTo<Model, $this>
     */
    public function notifiable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @phpstan-return BelongsTo<NotificationTemplate, $this>
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class, 'template_id');
    }
<<<<<<< .merge_file_PsnKGY
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

=======
>>>>>>> .merge_file_lTgcOi
}
