<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Mailファサードをインポート
use Illuminate\Support\Facades\Mail;

class LpTemplateController extends Controller
{

    /**
     * 入力画面
     */
    public function input()
    {
        // Bladeで使う変数
        $hash = array(
            'title' => 'お問い合わせ',
            'subtitle' => '入力画面',
        );
        return view('lp_template.input')->with($hash);
    }

    /**
     * 確認画面
     */
    public function confirm(\App\Http\Requests\LpTemplateRequest $request)
    {
        // Bladeで使う変数
        $hash = array(
            'request' => $request,
            'title' => 'メールフォーム デモ',
            'subtitle' => '確認画面',
        );
        return view('lp_template.confirm')->with($hash);
    }

    /**
     * 完了画面
     */
    public function finish(Request $request)
    {
        // メール送信
        $data = $request->all(); // 入力されたデータを全て「配列」として受け取る
        Mail::send(['text' =>'emails.LpTemplate'],$data,function($message) {$message->to('送信先メールアドレス')->subject('ランディングページからお問い合わせがありました。');});
        return view('lp_template.finish');
    }
}
