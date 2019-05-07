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

namespace Negarang\FaceDesigner\Items\Wearable;

/**
 * Class Jacket
 * @package Negarang\FaceDesigner\Items\Wearable
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
class Jacket extends WearableItem {

    /**
     * @var string
     */
    static protected $graphicsDir = "jacket";

    /**
     * @var int
     */
    static protected $minId = self::ID_RST_ITEM;

    /**
     * @var int
     */
    static protected $maxId = self::ID_RST_ITEM;

    /**
     * @var int[] X,Y
     */
    static protected $position = [24, 122];

    /**
     * Jacket constructor.
     * @param int $id
     * @param int $colorId
     */
    public function __construct($id, $colorId) {
        parent::__construct($id, $colorId);
    }
}