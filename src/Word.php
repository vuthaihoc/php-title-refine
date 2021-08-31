<?php


namespace HocVT\TitleRefine;


class Word
{
    // các ký tự của từ
    public array $parts = [];
    // số lần xuất hiện trong nội dung
    public int $matched_count = 0;
    // số lần xuất hiện trong nội dung dạng bắt đầu của từ
    public int $start_with_count = 0;

    /**
     * Word constructor.
     * @param array $parts
     * @param int $matched_count
     * @param int $start_with_count
     */
    public function __construct(array $parts, int $matched_count, int $start_with_count)
    {
        $this->parts = $parts;
        $this->matched_count = $matched_count;
        $this->start_with_count = $start_with_count;
    }


    public function getWeight(){
        $weight_map = [
//           'length' => 'weight'
            1 => 4,
            2 => 6,
            3 => 15,
            4 => 23,
            5 => 32,
            6 => 50,
        ];
        $length = array_reduce($this->parts, function ($total, $part){
            return $total + mb_strlen($part);
        }, 0);
        if($length == 0){
            return 0;
        }
        return $weight_map[$length] ?? $weight_map[6];
    }

    public function getScore(){
        return $this->getWeight() * $this->matched_count;
//        return $this->getWeight() * ($this->matched_count - $this->start_with_count);
    }

    public function __toString(){
        return implode("", $this->parts);
    }

    public static function maxScore(array $words){
        usort($words, function ($a, $b){
            return $a->getScore() < $b->getScore();
        });
        return $words[0];
    }

}