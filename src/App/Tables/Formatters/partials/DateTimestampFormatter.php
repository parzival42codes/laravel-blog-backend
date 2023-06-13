<?php

namespace partials;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Okipa\LaravelTable\Abstracts\AbstractFormatter;

class DateTimestampFormatter extends AbstractFormatter
{
    public function __construct(protected string $format, protected string|null $timezone = null)
    {

    }

    public function format(Model $model, string $attribute): string
    {
        if (! $model->$attribute) {
            return '';
        }

        $date = Carbon::createFromTimestamp($model->$attribute);

        if (is_string($this->timezone)) {
            $date->timezone($this->timezone);
        }

        return $date->format($this->format);
    }
}
