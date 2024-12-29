<?php

namespace App\Http\Controllers;

use App\Http\Services\DiaryService;
use Illuminate\Support\Facades\Log;

class ListController extends Controller
{
    protected DiaryService $diaryService;

    public function __construct(
        DiaryService $diaryService
    ) {
        $this->diaryService = $diaryService;
    }

    /**
     * 日記一覧表示
     * 
     * @return json
     */
    public function getDiaryList()
    {
        Log::debug("getDiaryList");
        $data = $this->diaryService->getAllDiary();

        return $data;
    }
}
