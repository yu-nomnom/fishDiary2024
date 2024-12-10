<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\DiaryService;

class ListController extends Controller
{
    private DiaryService $diaryService;

    /**
     * @var DiaryService $diaryService
     */
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
        $data = $this->diaryService->getAllDiary();

        return $data;
    }
}
