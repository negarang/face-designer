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
 * Class HeadHairItem
 * @package Negarang\FaceDesigner\Items\Head
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
abstract class HeadHairItem extends HeadItem {

    /**
     * @var string[]
     */
    static protected $colors = ["black", "brown", "red", "blondd"];

    /**
     * @var string Color of All Hair Items. [COLOR SYNC]
     */
    static private $hairColor;

    /**
     * Hair constructor.
     * @param int $id
     * @param int $colorId
     * @param int $distance
     */
    public function __construct($id, $colorId, $distance=0) {
        parent::__construct($id, $colorId, $distance);
        // Is it accepted?
        if (strcmp($colorId, $this->colorId) === 0) {
            // We want to keep only color of
            // the last Hair Item that created.
            // It is required for color sync.
            self::$hairColor = $colorId;
        }
    }

    /**
     * @return resource
     */
    public function getImage() {
        if (self::$hairColor !== null) {
            // Sync Color.
            $this->setColor(self::$hairColor);
        }
        return parent::getImage();
    }
}