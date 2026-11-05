<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Traits;

trait NotifyThemeMutators
{
    /**
<<<<<<< .merge_file_dfVU3d
     * @param array<string, int> $value
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, int>
=======
=======
     * @param  array<string, int>  $value
>>>>>>> .merge_file_z0tC8k
     * @return array<string, int|string>
>>>>>>> laraxot/dev
=======
     * @return array<string, int|string>
>>>>>>> laraxot/dev
     */
    public function getLogoAttribute(?array $value): array
    {
        return $this->getLogo();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    function getLogo(): array
        {
            return [
                // 'path' => asset(strval($this->logo_src)),
                'path' => url($this->getFirstMediaUrl()),
                'width' => $this->logo_width ?? 50,
                'height' => $this->logo_height ?? 50];
        }
=======
=======
>>>>>>> laraxot/dev
    /**
     * @return array<string, int|string>
     */
    public function getLogo(): array
    {
        return [
            // 'path' => asset(strval($this->logo_src)),
            'path' => url($this->getFirstMediaUrl()),
            'width' => (int) ($this->logo_width ?? 50),
            'height' => (int) ($this->logo_height ?? 50)];
    }
<<<<<<< .merge_file_dfVU3d
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

=======
>>>>>>> .merge_file_z0tC8k
}
