<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Modules\Notify\Models\MailTemplate;

trait MailTemplateLogRelations
{
<<<<<<< HEAD
<<<<<<< HEAD
    function template(): BelongsTo
        {
            return $this->belongsTo(MailTemplate::class, 'template_id');
        }

    function mailable(): MorphTo
        {
            return $this->morphTo();
        }
=======
=======
>>>>>>> laraxot/dev
    /**
     * @phpstan-return BelongsTo<MailTemplate, $this>
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(MailTemplate::class, 'template_id');
    }

    /**
     * @phpstan-return MorphTo<Model, $this>
     */
    public function mailable(): MorphTo
    {
        return $this->morphTo();
    }
<<<<<<< .merge_file_dZQA7Q
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

=======
>>>>>>> .merge_file_DGCQ5d
}
