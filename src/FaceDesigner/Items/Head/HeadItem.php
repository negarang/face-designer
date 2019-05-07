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

use Negarang\FaceDesigner\Item;

/**
 * Class HeadItem
 * @package Negarang\FaceDesigner\Items\Head
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
abstract class HeadItem extends Item {

    /**
     * @var string
     */
    static protected $graphicsParentDir = "head";

    /**
     * @var string[]
     */
    static protected $colors = ["plain", "dark", "light"];

}