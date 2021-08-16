<?php

declare(strict_types=1);

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * Module: Ajaxtest
 *
 * @category        Module
 * @author          XOOPS Development Team <https://xoops.org>
 * @copyright       {@link https://xoops.org/ XOOPS Project}
 * @license         GNU GPL 2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 */
/**
 * CommentsUpdate
 *
 * @param mixed $itemId
 * @param mixed $commentCount
 * @return bool
 */
function ajaxtestCommentsUpdate($itemId, $commentCount)
{
    /** @var \XoopsModules\Ajaxtest\Helper $helper */
    $helper = \XoopsModules\Ajaxtest\Helper::getInstance();
    /** @var \XoopsPersistableObjectHandler $helper- >getHandler('Employee') */
    if (!$helper->getHandler('Employee')->updateAll('comments', (int)$commentCount, new \Criteria('lid', (int)$itemId))) {
        return false;
    }
    return true;
}

/**
 * CommentsApprove
 *
 * @param string $comment
 * @return void
 */
function ajaxtestCommentsApprove(&$comment)
{
    // notification mail here
}
