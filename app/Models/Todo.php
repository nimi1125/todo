<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // テーブル名を明示的に指定
    protected $table = 'todo';

    // マスアサインメント可能なフィールド
    protected $fillable = ['title', 'detail', 'due_date', 'status']; // 保存したいフィールドを追加

    // ステータス（状態）定義
    const STATUS = [
        1 => [ 'label' => '未着手', 'class' => 'label-danger' ],
        2 => [ 'label' => '着手中', 'class' => 'label-info' ],
        3 => [ 'label' => '完了', 'class' => '' ],
    ];

    // ステータス（状態）ラベルのアクセサメソッド
    public function getStatusLabelAttribute()
    {
        $status = $this->attributes['status'];

        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['label'];
    }
}
