<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question; 

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでquestions/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
        // 質問一覧を取得
        $question = new Question;
        $questions = Question::orderBy('created_at', 'desc')->paginate(7);
        //dd($questions);

        // 質問一覧ビューでそれを表示
        return view('welcome', [
            'questions' => $questions,
            'question' => $question,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでquestions/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $question = new Question;

        // 質問作成ビューを表示
        return view('questions.create', [
            'question' => $question,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // postでquestions/にアクセスされた場合の「登録処理」
    public function store(Request $request)
    {
        // メッセージを作成
        $question = new Question;
        $question->title = $request->title;
        $question->content = $request->content;
        $question->status = $request->status;
        $question->save();

        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // getでquestions/（任意のid）にアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        // idの値でユーザを検索して取得
        $question = Question::findOrFail($id);

        // ユーザ詳細ビューでそれを表示
        return view('questions.show', [
            'question' => $question,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // getでquesitons/（任意のid）/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // putまたはpatchでquestions/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // deleteでquesitons/（任意のid）にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        //
    }
}
