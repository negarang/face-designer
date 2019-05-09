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

namespace Negarang\FaceDesigner\Items\Effect;

/**
 * Class Weather
 * @package Negarang\FaceDesigner\Items\Background
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
class Weather extends EffectItem {

    /**
     * @var string
     */
    static protected $graphicsDir = "weather";

    /**
     * @var int
     */
    static protected $minId = self::ID_RST_ITEM;

    /**
     * @var int
     */
    static protected $maxId = self::ID_RST_ITEM;

    /**
     * Filled constructor.
     * @param int $id
     */
    public function __construct($id) {
        parent::__construct($id);
    }

    /**
     * @return string
     */
    static public function getDirectoryPattern() {
        return self::removeDirectoryPlaceholder(self::PATH_PLACEHOLDER_COLOR);
    }
}