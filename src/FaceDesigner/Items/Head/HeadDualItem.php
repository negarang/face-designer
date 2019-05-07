<?php
/**
 * Project: Negarang FaceDesigner
 * This file is part of FaceDesigner.
 *
 * (c) Milad Abdollahnia
 * http://milad-ab.ir
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Negarang\FaceDesigner\Items\Head;

/**
 * Class HeadDualItem
 * @package Negarang\FaceDesigner\Items\Head
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
abstract class HeadDualItem extends HeadItem {

    const LEFT_ITEM_DIR = "left";
    const RIGHT_ITEM_DIR = "right";

    /**
     * @return string
     */
    static public function getDirectoryPattern() {
        $newPattern = is_subclass_of(static::class, LeftItem::class) ?
            self::LEFT_ITEM_DIR : self::RIGHT_ITEM_DIR;
        return self::beforeDirectoryPlaceholder(self::PATH_PLACEHOLDER_COLOR, $newPattern);
    }

    /**
     * @return int
     */
    public function getPositionX() {
        $position = parent::getPositionX();
        if (is_subclass_of(static::class, RightItem::class)) {
            return $position - $this->standardWidthDiff();
        }

        return $position;
    }
}