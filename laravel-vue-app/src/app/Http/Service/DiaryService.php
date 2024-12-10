<?php

namespace App\Http\Services;

use App\Repositories\Interfaces\DiaryRepositoryInterface;

/**
 * 日記に関するクラス
 */
class DiaryService
{
    private DiaryRepositoryInterface $diaryRepository;

    /**
     * @var DiaryRepositoryInterface $diaryRepository
     */
    public function __construct(
        DiaryRepositoryInterface $diaryRepository
    ) {
        $this->diaryRepository = $diaryRepository;
    }

    /**
     * 一覧表示画面の日記データを取得
     * 
     * @return array 日記データ
     */
    public function getAllDiary()
    {
        $diary['diaryList'] = $this->diaryRepository->getAllDiary();
        $diary['diaryCount'] = $this->diaryRepository->countDiary();

        return $diary;
    }
}