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
 * Class Mouth
 * @package Negarang\FaceDesigner\Items\Head
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
class Mouth extends HeadItem {

    /**
     * @var string
     */
    static protected $graphicsDir = "mouth";

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
    static protected $position = [52, 107];

    /**
     * @var int[]
     */
    static protected $distancesRange = [2, 2];

    /**
     * Mouth constructor.
     * @param int $id
     * @param int $colorId
     * @param int $distance
     */
    public function __construct($id, $colorId, $distance) {
        parent::__construct($id, $colorId, $distance);
    }
}