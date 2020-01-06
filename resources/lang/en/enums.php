<?php

use App\Enums\TaskKind;

return [

  TaskKind::class => [
    TaskKind::QUOTE             => '見積もり',
    TaskKind::INTERNAL_MATERIAL => '社内資料',
    TaskKind::EXTERNAL_MATERIAL => '社外資料',
    TaskKind::APPOINTMENT       => 'アポイント',
    TaskKind::BUSINESS_TRIP     => '出張手配',
    TaskKind::EXPENSE           => '経費精算',
    TaskKind::CONFIRM           => '要確認',
    TaskKind::OTHER             => 'その他',
  ],

];