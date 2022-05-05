<?php namespace Notion\Blocks;

use Notion\RichText;
use Notion\BlockBase;

class Heading1Block extends BlockBase
{
    public $type = 'heading_1';

    public function __construct(RichText $richText, $checked = false)
    {
        $this->typeConfiguration = [
            'rich_text' => [$richText->get()],
        ];
    }

    public function toHtml()
    {
        return "<h1>{$this->plain_text}</h1>";
    }
}
