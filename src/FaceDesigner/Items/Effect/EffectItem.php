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

use Negarang\FaceDesigner\Item;

/**
 * Class EffectItem
 * @package Negarang\FaceDesigner\Items\Background
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
abstract class EffectItem extends Item {

    /**
     * @var string
     */
    static protected $graphicsParentDir = "effects";

    /**
     * @var int[] X,Y
     */
    static protected $position = [0, 0];

    /**
     * @var bool
     */
    static protected $optional = true;
}