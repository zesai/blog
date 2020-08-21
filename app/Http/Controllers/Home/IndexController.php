<?php

namespace App\Http\Controllers\Home;

class IndexController extends BaseController
{
    public function index()
    {
//        $head = config('bjyblog.head');
//
//        $pinnedArticles = Article::where('is_top', 1)
//            ->with('category', 'tags')
//            ->orderBy('created_at', 'desc')
//            ->get();
//
//        $selectedYear = Carbon::createFromFormat('Y', $request->input('year', now()->year));
//
//        $yearArticles = Article::whereYear('created_at', '=', $selectedYear)->get();
//        $firstArticleDate = Article::orderBy('created_at')->value('created_at') ?? now();
//
//        $calendarGraphYears = [];
//
//        while (!$firstArticleDate->isCurrentYear()) {
//            $calendarGraphYears[] = $firstArticleDate->year;
//
//            $firstArticleDate = $firstArticleDate->addYear();
//        }
//
//        $calendarGraphYears[] = now()->year;
//
//        rsort($calendarGraphYears);
//
//        $articlesCount = Article::selectRaw('COUNT(*) AS count, DATE(created_at) as date')
//            ->groupBy('date')
//            ->get()
//            ->keyBy('date')
//            ->toArray();
//
//        $allDaysOfTheYear = CarbonPeriod::create($selectedYear->firstOfYear()->format('Y-m-d'), $selectedYear->endOfYear()->format('Y-m-d'));
//
//        $calendarGraph = [];
//        $x = 14;
//
//        foreach ($allDaysOfTheYear as $key => $date) {
//            /** @var \Carbon\Carbon $date */
//            $dateString = $date->format('Y-m-d');
//            $count = $articlesCount[$dateString]['count'] ?? 0;
//            $fill = $count === 0 ? '#ebedf0' : '#c6e48b';
//
//            if ($date->month === 12 && $date->weekOfYear === 1) {
//                $calendarGraph[53][] = [
//                    'x' => $x,
//                    'y' => $date->dayOfWeek * 13,
//                    'date' => $dateString,
//                    'count' => $count,
//                    'fill' => $fill,
//                ];
//            } else {
//                $weekOfYear = $date->dayOfWeek === 0 ? $date->weekOfYear + 1 : $date->weekOfYear;
//
//                $calendarGraph[$weekOfYear][] = [
//                    'x' => $x,
//                    'y' => $date->dayOfWeek * 13,
//                    'date' => $dateString,
//                    'count' => $count,
//                    'fill' => $fill,
//                ];
//            }
//
//            if ($date->dayOfWeekIso === 7) {
//                $x--;
//            }
//        }
//
//        $assign = compact('yearArticles', 'pinnedArticles', 'calendarGraphYears', 'calendarGraph', 'head', 'selectedYear');

        return view('home.index.index');
//        dd(auth()->guard('socialite')->user());
//        return view('home.index.index');
    }
}