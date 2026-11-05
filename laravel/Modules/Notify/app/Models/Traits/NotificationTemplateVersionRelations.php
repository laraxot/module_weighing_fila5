<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Notify\Models\NotificationTemplate;

trait NotificationTemplateVersionRelations
{
<<<<<<< HEAD
<<<<<<< HEAD
    function template(): BelongsTo
        {
            return $this->belongsTo(NotificationTemplate::class, 'template_id');
        }
=======
=======
>>>>>>> laraxot/dev
    /**
     * @phpstan-return BelongsTo<NotificationTemplate, $this>
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class, 'template_id');
    }
<<<<<<< .merge_file_5R8kvb
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

=======
>>>>>>> .merge_file_LVphYh
}
