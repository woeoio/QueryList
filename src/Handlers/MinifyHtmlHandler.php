<?php

namespace QL\Handlers;

use QL\Contracts\HtmlHandlerContract;

class MinifyHtmlHandler implements HtmlHandlerContract
{
    /**
     * @param  string  $html
     * @param  mixed  ...$args
     * @return string
     */
    public function handle(string $html, ...$args): string
    {
        // merge 2 continue space to 1
        $html = preg_replace('/\s{2,}/', ' ', $html);

        // remove new line
        return str_replace("\n", '', $html);
    }
}
