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

use Negarang\FaceDesigner\Item;

/**
 * Class BodyItem
 * @package Negarang\FaceDesigner\Items\Wearable
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
abstract class WearableItem extends Item {

    /**
     * @var string
     */
    static protected $graphicsParentDir = "wearable";

    /**
     * @var string[]
     */
    static protected $colors = ["white", "black", "brown", "yellow", "blue", "violet", "red", "green"];

    /**
     * @var bool
     */
    static protected $optional =  true;

}