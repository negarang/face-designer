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
 * Class HairBack
 * @package Negarang\FaceDesigner\Items\Head
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
class HairBack extends HeadHairItem {

    /**
     * @var string
     */
    static protected $graphicsDir = "hair_back";

    /**
     * @var int
     */
    static protected $minId = 1;

    /**
     * @var int
     */
    static protected $maxId = self::ID_RST_ITEM;

    /**
     * @var int[] X,Y
     */
    static protected $position = [0, 23];

    /**
     * @var bool
     */
    static protected $optional =  true;

    /**
     * Hair constructor.
     * @param int $id
     * @param int $colorId
     */
    public function __construct($id, $colorId) {
        parent::__construct($id, $colorId);
    }

    /**
     * @param int $maxId Maximum Id
     * @param int $x Position X
     * @param int $y Position Y
     * @param int $minId Minimum Id
     */
    static public function config($maxId, $x=0, $y=0, $minId=0) {
        parent::config($maxId, $x, $y);
        self::$minId = $minId;
    }
}