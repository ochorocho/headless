<?php

/*
 * This file is part of the "headless" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FriendsOfTYPO3\Headless\XClass\Typolink;

/**
 * @codeCoverageIgnore
 */
class LinkResult extends \TYPO3\CMS\Frontend\Typolink\LinkResult
{
    public function jsonSerialize(): array
    {
        $prepared = parent::jsonSerialize();

        $prepared['url'] = $prepared['href'];

        unset($prepared['href']);

        return $prepared;
    }
}
