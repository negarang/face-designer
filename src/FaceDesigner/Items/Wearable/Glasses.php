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
 * Class Glasses
 * @package Negarang\FaceDesigner\Items\Wearable
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
class Glasses extends WearableItem {

    /**
     * @var string
     */
    static protected $graphicsDir = "glasses";

    /**
     * @var int
     */
    static protected $minId = self::ID_RST_ITEM;

    /**
     * @var int
     */
    static protected $maxId = self::ID_RST_ITEM;

    /**
     * @var array
     */
    static protected $colors = [];

    /**
     * @var int[] X,Y
     */
    static protected $position = [27, 57];

    /**
     * @var int[]
     */
    static protected $distancesRange = [2, 2];

    /**
     * Glasses constructor.
     * @param int $id
     * @param int $distance
     */
    public function __construct($id, $distance) {
        parent::__construct($id, 0, $distance);
    }

    /**
     * @return string
     */
    static public function getDirectoryPattern() {
        return self::removeDirectoryPlaceholder(self::PATH_PLACEHOLDER_COLOR);
    }
}