<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Notify\Models\MailTemplate;

trait MailTemplateVersionRelations
{
<<<<<<< HEAD
<<<<<<< HEAD
    function template(): BelongsTo
        {
            return $this->belongsTo(MailTemplate::class, 'template_id');
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
<<<<<<< .merge_file_w54Pr3
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

=======
>>>>>>> .merge_file_QRMsxP
}
