<?php

namespace Spatie\ServerMonitor\Models\Presenters;

use Spatie\ServerMonitor\Helpers\Emoji;
use Spatie\ServerMonitor\Models\Enums\CheckStatus;

trait CheckPresenter
{
    public function getCheckStatusAsEmojiAttribute(): string
    {
        if ($this->status === CheckStatus::SUCCESS) {
            return Emoji::ok();
        }

        if ($this->status === CheckStatus::FAILED) {
            return Emoji::notOk();
        }

        if ($this->status === CheckStatus::WARNING) {
            return Emoji::warning();
        }

        if ($this->status === CheckStatus::NOT_YET_CHECKED) {
            return Emoji::unknown();
        }

        return '';
    }
}
