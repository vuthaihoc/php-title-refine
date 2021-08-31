<?php


namespace HocVT\TitleRefine;


class Refiner
{

    protected array $title;
    protected array $dict;

    protected function __construct($title, $content)
    {
        $this->parseTitle($title);
        $this->makeDict($content);
    }

    protected function parseTitle($title)
    {
        $this->title = preg_split("/[\s\r\n\t]+/", $title);
    }

    protected function makeDict($content)
    {
        $words = preg_split("/[\s\r\n\t]+/", $content);
        foreach ($words as $word) {
            $word = mb_strtolower($word);
            if (isset($this->dict[$word])) {
                $this->dict[$word]++;
            } else {
                $this->dict[$word] = 1;
            }
        }
    }

    protected function predict()
    {
        $cases = [];
        $parts_count = count($this->title);
        foreach ($this->title as $k => $title) {
            $word = '';
            $parts = [];
            $cases[$k] = [];
            for ($index = $k; $index < $parts_count; $index++) {
                $word .= $this->title[$index];
                $parts[] = $this->title[$index];
                $matched = $this->dict[mb_strtolower($word)] ?? 0;
                $started_with = $this->countStartedWith($word);
//                if($matched){
//                    dump($word);
//                }
                $cases[$k][] = new Word($parts, $matched, $started_with);
                if($started_with == 0){
                    break;
                }
            }
        }
        $result = [];
        $cases_length = count($cases);
        $max_cases = [];
        foreach ($cases as $k => $case){
            $max_cases[$k] = Word::maxScore($case);
        }
        for($k = 0; $k < $cases_length; $k++){
            $result[] = $max_cases[$k];
            $k += count($max_cases[$k]->parts) - 1;
        }
        echo("\n=>      " . join(" ", $result));
    }

    protected function countStartedWith($part){
        $total = 0;
        $part = mb_strtolower($part);
        foreach ($this->dict as $word => $count){
            if($part != $word && mb_stripos($word, $part) === 0){
                $total += $count;
            }
        }
        return $total;
    }

    public static function run($title, $content)
    {
        $instance = new self($title, $content);
        $instance->predict();
    }


}