<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Word_conversion {

    function convert_to_sex($value) {
        switch ($value) {
            case 0: echo '男'; break;
            case 1: echo '女'; break;
            default: echo 'エラー！'; break;
        }
    }

    function convert_to_class($value) {
        switch ($value) {
            case 0: echo 'アーチナイト'; break;
            case 1: echo 'アーマー'; break;
            case 2: echo 'アイアンアーチ'; break;
            case 3: echo 'アクスアーマー'; break;
            case 4: echo 'アクスナイト'; break;
            case 5: echo 'アクスファイター'; break;
            case 6: echo 'ウィンドマージ'; break;
            case 7: echo 'ウォーリア'; break;
            case 8: echo 'エンペラー'; break;
            case 9: echo 'キラーアーチ'; break;
            case 10: echo 'クイーン'; break;
            case 11: echo 'グレートナイト'; break;
            case 12: echo 'サンダーマージ'; break;
            case 13: echo 'シーフ'; break;
            case 14: echo 'シーフファイター'; break;
            case 15: echo 'ジェネラル'; break;
            case 16: echo 'シビリアン'; break;
            case 17: echo 'シャーマン'; break;
            case 18: echo 'ジュニアロード'; break;
            case 19: echo 'スナイパー'; break;
            case 20: echo 'セイジ'; break;
            case 21: echo 'ソードアーマー'; break;
            case 22: echo 'ソードファイター'; break;
            case 23: echo 'ソードマスター'; break;
            case 24: echo 'ソシアルナイト'; break;
            case 25: echo 'ダークビショップ'; break;
            case 26: echo 'ダークプリンス'; break;
            case 27: echo 'ダークマージ'; break;
            case 28: echo 'ダンサー'; break;
            case 29: echo 'デュークナイト'; break;
            case 30: echo 'ドラゴンナイト'; break;
            case 31: echo 'ドラゴンマスター'; break;
            case 32: echo 'ドラゴンライダー'; break;
            case 33: echo 'トルバドール'; break;
            case 34: echo 'バード'; break;
            case 35: echo 'バーバリアン'; break;
            case 36: echo 'ハイプリースト'; break;
            case 37: echo 'パイレーツ'; break;
            case 38: echo 'パラディン'; break;
            case 39: echo 'バロン'; break;
            case 40: echo 'ハンター'; break;
            case 41: echo 'ビショップ'; break;
            case 42: echo 'ファイアマージ'; break;
            case 43: echo 'ファルコンナイト'; break;
            case 44: echo 'フォーレスト'; break;
            case 45: echo 'フォレストナイト'; break;
            case 46: echo 'プリースト'; break;
            case 47: echo 'フリーナイト'; break;
            case 48: echo 'プリンス'; break;
            case 49: echo 'プリンセス'; break;
            case 50: echo 'ペガサスナイト'; break;
            case 51: echo 'ボウアーマー'; break;
            case 52: echo 'マージ'; break;
            case 53: echo 'マージナイト'; break;
            case 54: echo 'マージファイター'; break;
            case 55: echo 'マウンテンシーフ'; break;
            case 56: echo 'マスターナイト'; break;
            case 57: echo 'ランスナイト'; break;
            case 58: echo 'ロードナイト'; break;
            case 59: echo 'ロングアーチ'; break;
            default: echo 'エラー！'; break;
        }
    }

    function convert_to_skill($value) {
        switch ($value) {
            case 0: echo '大盾'; break;
            case 1: echo '怒り'; break;
            case 2: echo '追撃'; break;
            case 3: echo '連続'; break;
            case 4: echo '盗む'; break;
            case 5: echo '見切り'; break;
            case 6: echo '祈り'; break;
            case 7: echo '必殺'; break;
            case 8: echo '待ち伏せ'; break;
            case 9: echo '突撃'; break;
            case 10: echo '流星剣'; break;
            case 11: echo '月光剣'; break;
            case 12: echo '太陽剣'; break;
            case 13: echo 'ライブ'; break;
            case 14: echo '踊る'; break;
            case 15: echo 'カリスマ'; break;
            case 16: echo 'エリート'; break;
            case 17: echo '値切り'; break;
            default: echo 'エラー！'; break;
        }
    }
}