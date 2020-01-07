<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TaskKind extends Enum  implements LocalizedEnum
{
    const QUOTE =   'quote';
    const INTERNAL_MATERIAL =  'internal_material';
    const EXTERNAL_MATERIAL = 'external_material';
    const APPOINTMENT = 'appointment';
    const BUSINESS_TRIP = 'business_trip';
    const EXPENSE = 'expense';
    const CONFIRM = 'confirm';
    const OTHER = 'other';

}

