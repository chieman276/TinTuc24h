<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateComment;
use App\Services\Interfaces\CommentServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller{

    protected $commentService;

    public function __construct(CommentServiceInterface $commentService)
    {
        $this->commentService = $commentService;
    }

    public function index(Request $request){
        $comments =  $this->commentService->getAll($request);
        $params = [
            "comments" => $comments,
        ];

        return view('backend.comment.index',$params);
    }

    public function edit($id)
    {
        $comments = $this->commentService->findById($id);
        $params = [
            'comments' => $comments,
        ];

        return view('backend.comment.edit', $params);
    }



    public function update(UpdateComment $request, $id)
    {
        try {
            $this->commentService->update($request, $id);
            return redirect()->route('comments.index')->with('success', 'Sửa bình luận' . ' ' . $request->content . ' ' .  'thành công');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('comments.index')->with('error', 'Sửa bình luận' . ' ' . $request->content . ' ' .  'không thành công');
        }
    }

    public function destroy($id)
    {
        try {
             $this->commentService->destroy($id);
            return redirect()->route('comments.index')->with('success', 'Xóa bình luận thành công');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('comments.index')->with('error', 'Xóa bình luận không thành công');
        }
    }

}
