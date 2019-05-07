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
 * Class Eye
 * @package Negarang\FaceDesigner\Items\Head
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
abstract class Eye extends HeadDualItem {

    /**
     * @var string
     */
    static protected $graphicsDir = "eyes";

    /**
     * @var int
     */
    static protected $minId = self::ID_RST_ITEM;

    /**
     * @var int
     */
    static protected $maxId = self::ID_RST_ITEM;

    /**
     * @var string[]
     */
    static protected $colors = ["black", "brown", "hazel", "green", "blue", "gray"];

    /**
     * Eye constructor.
     * @param int $id
     * @param int $colorId
     */
    public function __construct($id, $colorId) {
        parent::__construct($id, $colorId);
    }
}