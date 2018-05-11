<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    /** @var array $emojis */
    private $emojis = array(
        "🚀",
        "🚃",
        "🚄",
        "🚅",
        "🚇"
    );


    /**
     * @return \Generator
     */
    public function generate(): \Generator
    {
        foreach ($this->emojis as $emoji){

            yield $emoji;

        }
    }
}