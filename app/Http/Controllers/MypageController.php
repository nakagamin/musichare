<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\PasswordChangeRequest;
use Storage;

class MypageController extends Controller
{
    public function edit(){
        $user = \Auth::user();
        return view('mypage/edit', compact('user'));
    }

    public function update(UpdateUserRequest $request){
        $posts = $request->all();
        // dd($posts);
        // DBからログインユーザーの情報を取得
        // findは主キー（users.id）に一致する行を取得してくるつまりユーザーID＝1の情報を取得する
        $user = User::find(\Auth::id());
        // 更新したいデータはユーザー情報にデータを入れる
        $user->name = $posts['user']['name'];
        $user->description = $posts['user']['description'];
        // S3にアップロード
        $image = $request->file('user.image');
         // バケットの`users`フォルダへアップロード
    if(!empty($image)){
        $path = Storage::disk('s3')->putFile("users", $image, 'public');
        // アップロードした画像のフルパスを取得
        $user->image = config('app.s3_url').$path;
    }
        $user->save();
        return redirect('/mypage')->with('success', 'プロフィール情報が更新されました！');
    }
    public function password(){
        $user = \Auth::user();
        return view('mypage/passwordchange', compact('user'));
    }

    public function passwordChange(PasswordChangeRequest $request){
        $user = \Auth::user();
      $user->password = bcrypt($request->input('new-password'));
      $user->save();

      return redirect('/mypage')->with('success', 'パスワードの変更が完了しました。');
    }

    public function show($id){
        $user = User::findOrFail($id);
        // #TODOあとで作品取得する
        return view('mypage/show', compact('user'));
    }
}