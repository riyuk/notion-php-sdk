<?php namespace Notion\Blocks;

use Notion\RichText;
use Notion\BlockBase;

class Heading3Block extends BlockBase
{
    public $type = 'heading_3';

    public function __construct(RichText $richText, $checked = false)
    {
        $this->typeConfiguration = [
            'rich_text' => [$richText->get()],
        ];
    }

    public function toHtml()
    {
        return "<h3>{$this->plain_text}</h3>";
    }
}
