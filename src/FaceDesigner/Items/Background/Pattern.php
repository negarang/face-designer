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

namespace Negarang\FaceDesigner\Items\Background;

/**
 * Class Pattern
 * @package Negarang\FaceDesigner\Items\Background
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
class Pattern extends BackgroundItem {

    /**
     * @var string
     */
    static protected $graphicsDir = "pattern";

    /**
     * @var int
     */
    static protected $minId = self::ID_RST_ITEM;

    /**
     * @var int
     */
    static protected $maxId = self::ID_RST_ITEM;

    /**
     * @var int[]
     */
    static protected $colors = ["white", "black", "brown",
        "yellow", "blue", "violet", "red", "green"];

    /**
     * Pattern constructor.
     * @param int $id
     * @param int $colorId
     */
    public function __construct($id, $colorId) {
        parent::__construct($id, $colorId);
    }
}